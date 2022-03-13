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
<header><a href="welcome.php"><img src="az.gif" style="width: 100%; "></a>
	
	
	<nav>
  <ul>
  	<div class="linear-gradient">
    <li class="deroulant"><a href="welcome.php">Menu &ensp;</a>
      <ul class="sous">
      	<li><a href="welcome.php">ACCUEIL</a></li>
        <li><a href="ecommerce.php">E-COMMERCE</a></li>
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
    <div class="butt"><span> <a href="https://www.expressvpn.com/"><img id="imgemo" src="https://ftr.imgix.net/2K2K0JHVwoIuKPesUQzRSa/d742ce2bbf2014a8cf69f46d44da6dbf/expressvpn-icon.png?auto=format,compress&cs=srgb&fit=max&w=480&dpr=1&q=55&s=6a0510e00637a2bf72f7e19911caee6e" style="width: 100%; height: 100%"><h6 id="raya">Expressvpn</h6></a></span></div>
    
   <br>
        <div><div class="butt"><span><a href="https://fra.privateinternetaccess.com/"><img id="imgemo" src="https://www.privateinternetaccess.com/press/mascot/pia-mascot.jpg"style="width: 50%;height: 100%"><h6 id="raya">PrivateInternetAccess</h6></a></span></div></div>
        <br>
        <div><div class="butt"><span><a href="https://www.cyberghostvpn.com/"><img id="imgemo" src="https://lh3.googleusercontent.com/NiWL5zsTW_yx0Ndz62srFmE5WqhpDrhOiE4GPWmqxo5LK0fSvC7xSh0wPSOtHkKe0MDo=s85" style="width: 50%;height: 100%"><h6 id="raya">CyberghostVPN</h6></a></span></div></div>
       
    </div>
</div></div>
<br>
<div class="cont">
    <div class="butt"><span><a href="https://surfshark.com/"><img id="imgemo" src="https://surfshark.com/media/Surfshark-Logo/Logo/Original/PNG/Surfshark.png"style="width: 100%;height: 100%"><h6 id="raya">Surfshark</h6></a></span></div>
    
   <br>
        <div><div class="butt"><span><a href="https://www.vyprvpn.com/"><img id="imgemo" src="https://fr.wizcase.com/wp-content/uploads/2019/09/vyprvpn-300x214.png"style="
    width: 100px;
    height: 80px;
"><h6 id="raya">Vyprvpn</h6></a></span></div></div>
        <br>
        <div><div class="butt"><span><a href="https://www.Nordvpn.com/"><img id="imgemo" src="https://img2.freepng.fr/20181206/pyl/kisspng-nordvpn-virtual-private-network-openvpn-private-in-wizcase-vpn-5c09d54ac02002.882637941544148298787.jpg"style="height: 100%"><h6 id="raya">NordVPN</h6></a></span></div></div>
       
       
    </div>
</div></div>




</body>
</html>