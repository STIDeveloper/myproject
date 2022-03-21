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
<header><a href="index.html"><img src="az.gif" style="width: 100%;"></a>
	
	
	<nav>
  <ul>
  	<div class="linear-gradient">
    <li class="deroulant"><a href="index.html">Menu &ensp;</a>
      <ul class="sous">
      	<li><a href="welcome.php">ACCUEIL</a></li>
        <li><a href="vpn.php">VPN</a></li>
        <li><a href="meme.php">MEME</a></li>
         <li><a href="FORUM.php">FORUM</a></li>
         <li><a href="RECHERCHE.php">RECHERCHER</a></li>
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
  <center> 


<iframe src="https://drive.google.com/file/d/1tA8ELwMsy3X0AKe4d7Pvia49OOexZgCL/preview" width="1300" height="480"></iframe>

    </center>
   <br>
        <br>
 
      
<center><p style="background-color: red">  TENET <h5>(1 fim/semaine)</h5></p></center>




</body>
</html>