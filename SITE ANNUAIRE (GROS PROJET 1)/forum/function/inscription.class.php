<?php  session_start();
include_once 'function.php'; 


class inscription{
    
   private $pseudo;
   private $email;
   private $password;
   private $password2;
   private $bdd;
    
    public function __construct($pseudo,$email,$password,$password2){
        
        
        $pseudo = htmlspecialchars($pseudo);
        $email = htmlspecialchars($email);
        
        $this->pseudo = $pseudo; 
        $this->email = $email;
        $this->password = $password;
        $this->password2 = $password2;
        $this->bdd = bdd();
        
        
    }
    
    public function verif(){
        
        if(strlen($this->pseudo) > 5 AND strlen($this->pseudo) < 20 ){ /*Si le pseudo est bon*/
          
           $syntaxe = '#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#'; 
           if(preg_match($syntaxe,$this->email)){ /*email bon*/
               
               if(strlen($this->password) > 5 AND strlen($this->password) < 20 ){ /*Si le mot de passe à le bon format*/
                  
                   if($this->password == $this->password2){/*Deux mots de passe bon*/
                       return 'ok';
                   }
                   else { /*Mot de passe !=*/
                       $erreur = 'Les mots de passe doivent être identique';
                       return $erreur;
                   }
               }
               else {/*Mauvais format du mot de passe*/
                   $erreur = 'Le mot de passe doit contenir entre 5 et 20 caractères';
                   return $erreur;
               }
               
               
           }
           else { /*email mauvais*/
               $erreur = 'Syntaxe de l\'adresse email incorrect ';
               return $erreur;
           }
        }
        else { /*Pseudo mauvais*/
            $erreur = 'Le pseudu doit contenir entre 5 et 20 caractères';
            return $erreur;
        }
        
    }
    
    
    public function enregistrement(){
        
        $requete = $this->bdd->prepare('INSERT INTO membres(pseudo,email,password) VALUES(:pseudo,:email,:password)');
        $requete->execute(array(
            'pseudo'=>  $this->pseudo,
            'email' => $this->email,
            'password' => $this->password 
        ));
        
        return 1; 
       
    }
    
    public function session(){
        $requete = $this->bdd->prepare('SELECT id FROM membres WHERE pseudo = :pseudo ');
        $requete->execute(array('pseudo'=>  $this->pseudo));
        $requete = $requete->fetch();
        $_SESSION['id'] = $requete['id'];
        $_SESSION['pseudo'] = $this->pseudo;
        
        return 1;
    }
    
    
    
}

