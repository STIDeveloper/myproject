<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>La STI</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<header><a href="welcome.php"><img src="az.gif" style="width: 100%;"></a>
	
	
	<nav>
  <ul>
  	<div class="linear-gradient">
    <li class="deroulant"><a href="welcome.php">Menu &ensp;</a>
      <ul class="sous">
      	<li><a href="welcome.php">ACCUEIL</a></li>
        <li><a href="vpn.php">VPN</a></li>
        <li><a href="meme.php">MEME</a></li>
         <li><a href="FORUM.php">FORUM</a></li>
         <li><a href="RECHERCHE.php">RECHERCHER</a></li>
         <li><a href="FILM.php">FILM</a></li>
      </ul>
    </li>
</div>
    </nav>
</header>



<body>

<center>
<div class="page-header">
        <h1>Salut, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Bienvenue sur le site.</h1>
    </div>
    <p>
        
        <a href="logout.php" class="btn btn-danger">Se déconnecter</a>
    </p>
</center>



<div class="cont">
    <div class="butt"><span> <a href="https://www.gemo.fr/"><img id="imgemo" src="https://upload.wikimedia.org/wikipedia/fr/thumb/5/5f/Logo_de_G%C3%89MO_%282018%29.svg/1200px-Logo_de_G%C3%89MO_%282018%29.svg.png"><h6 id="raya">Gemo</h6></a></span></div>
    
   <br>
        <div><div class="butt"><span><a href="https://www.fnac.com/"><img id="imgemo" src="Z.png"><h6 id="raya">Fnac</h6></a></span></div></div>
        <br>
        <div><div class="butt"><span><a href="https://www.amazon.com/"><img id="imgemo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Amazon_logo.svg/1280px-Amazon_logo.svg.png" style="width: 50%; height: 50%"><h6 id="raya">Amazon</h6></a></span></div></div>
       
    </div>
</div></div>
<br>
<div class="cont">
    <div class="butt"><span><a href="https://www.cdiscount.com/"><img id="imgemo" src="https://upload.wikimedia.org/wikipedia/fr/thumb/7/74/Logo-Cdiscount-baseline.png/1200px-Logo-Cdiscount-baseline.png"><h6 id="raya">Cdiscount</h6></a></span></div>
    
   <br>
        <div><div class="butt"><span><a href="https://www.adidas.fr/"><img id="imgemo" src="https://upload.wikimedia.org/wikipedia/commons/e/ee/Logo_brand_Adidas.png"style="
    width: 100px;
    height: 80px;
"><h6 id="raya">Adidas</h6></a></span></div></div>
        <br>
        <div><div class="butt"><span><a href="https://www.darty.com/"><img id="imgemo" src="https://logos-marques.com/wp-content/uploads/2020/02/Darty-logo.png"><h6 id="raya">Darty</h6></a></span></div></div>
       
    </div>
</div></div>
<br>
<div class="cont">
    <div class="butt"><span><a href="https://www.boulanger.fr/"><img id="imgemo" src="https://upload.wikimedia.org/wikipedia/fr/thumb/4/46/Logo_Boulanger_2004.svg/1280px-Logo_Boulanger_2004.svg.png"><h6 id="raya">Boulanger</h6></a></span></div>
    
   <br>
        <div><div class="butt"><span><a href="https://www2.hm.com/fr_fr/index.html"><img id="imgemo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/H%26M-Logo.svg/1200px-H%26M-Logo.svg.png" style="
    width: 130px;
    height: 90PX;
"><h6 id="raya">H&M</h6></a></span></div></div>
        <br>
        <div><div class="butt"><span><a href="https://petzishop.000webhostapp.com/slata.html"><img id="imgemo" src="M.png"style="
    width: 210px;
    height: 90px;
"><h6 id="raya">PETZISHOP</h6></a></span></div></div>
       
    </div>
</div></div>




</body>
</html>