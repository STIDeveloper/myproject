<?php
require('config.php');
session_start();

if (isset($_POST['username'])){
  $username = stripslashes($_REQUEST['username']);
  $username = mysqli_real_escape_string($conn, $username);
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM `users` WHERE username='$username' and password='".hash('sha256', $password)."'";
  $result = mysqli_query($conn,$query) or die(mysql_error());
  $rows = mysqli_num_rows($result);
  if($rows==1){
      $_SESSION['username'] = $username;
      header("Location: index.php");
  }
  else
  {
    $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
  }
}
?>
<!DOCTYPE html>
<html>
<head>

 <style type="text/css">
    

.object-fit{
  &__container{   }
  &__cover{      object-fit: cover;      }
  &__fill{       object-fit: fill;       }
  &__contain{    object-fit: contain;    }
  &__none{       object-fit: none;       }
  &__scale-down{ object-fit: scale-down; }
}
img, video, svg{
  height: 95%;
  width:  100%;
  
}


/*this css is for decoration*/



.object-fit__container{
  position:relative;
  overflow: hidden;
  margin: 2%;
  height: 200px;
  width:  100%;
  background:rgba(0,0,0,1);
  &--large{
    height:400px;
  }





</style>


<link rel="icon" type="image/x-icon" href="lll.png" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>


 






<form class="box" action="" method="post" name="login">



<video class="object-fit__cover" src="mavidéo3.mp4" autoplay=1 muted=1 loop=1 ></video><br><br>



<h1 class="box-title">Connexion</h1>
<input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur">
<input type="password" class="box-input" name="password" placeholder="Mot de passe">
<input type="submit" value="Connexion " name="submit" class="box-button">
<p class="box-register">Vous êtes nouveau ici? <a href="register.php">S'inscrire</a></p>
<?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>
</form>
</body>
</html>