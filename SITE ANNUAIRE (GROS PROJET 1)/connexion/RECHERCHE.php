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
        <li><a href="ecommerce.php">E-COMMERCE</a></li>
        <li><a href="vpn.php">VPN</a></li>
        <li><a href="meme.php">MEME</a></li>
         <li><a href="FORUM.php">FORUM</a></li>
         <li><a href="FILM.php">FILM</a></li>
      </ul>
    </li>
</div>
    </nav>
</header>



<body style="background-color: #f79cd0">

             <center>
                 <div class="page-header">
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
<br>
<br>
<br>
<br>

<center>
<div style="width: 70%"> <p>Cherche ce que tu veux 🔎</p>
<script async src="https://cse.google.com/cse.js?cx=21b3ab37d61a25549"></script>
<div class="gcse-searchbox-only"></div>
</div>
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
</body>
</html>
















