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
  <link rel="stylesheet" href="stou.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
  <script src="script.js"></script>
</head>
<header><a href="welcome.php"><img src="az.gif" style="width: 100%;"></a>
	
	
	<nav>
  <ul>
    <div class="linear-gradient">
    <li class="deroulant"><a href="#">Menu &ensp;</a>
      <ul class="sous">
      	<li><a href="welcome.php">ACCUEIL</a></li>
        <li><a href="ecommerce.php">E-COMMERCE</a></li>
        <li><a href="vpn.php">VPN</a></li>
        <li><a href="meme.php">MEME</a></li>
        <li><a href="RECHERCHE.php">RECHERCHER</a></li>
        <li><a href="FILM.php">FILM</a></li>
      </ul>
    </li>
</div>
    </nav>
</header>




<body>


<center>
  <h1>Salut, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Bienvenue sur le site.</h1>
    </div>
    <p>
        
        <a href="logout.php" class="btn btn-danger">Se déconnecter</a>
    </p>
</center>
<br>
<br>
<br>
<br>
<br>
  <center> 
<div class="cont">
   <div class="butt"><span> <a href="https://lasti2.forumperso.com/"><img id="imgemo" src="for.png"><h6 id="raya"><strong>FORUM</h6></a></span></div></div>
    </center>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
      
<p style="background-color: red; font-size: 50px; text-align: center;">LE VRAI FORUM N'EST PAS TERMINER ! </p>



</body>
</html>








