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
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="sty.css">
</head>
<body style="background-color: #1b1b16;">
<ul>
  <li><a href="welcome.php">Menu</a></li>
  <li><a href="#contact">Contact</a></li>
  <li style="float:right"><a class="active" href="logout.php"><svg class="svg-icon" viewBox="0 0 20 20">
              <path fill="none" d="M12.443,9.672c0.203-0.496,0.329-1.052,0.329-1.652c0-1.969-1.241-3.565-2.772-3.565S7.228,6.051,7.228,8.02c0,0.599,0.126,1.156,0.33,1.652c-1.379,0.555-2.31,1.553-2.31,2.704c0,1.75,2.128,3.169,4.753,3.169c2.624,0,4.753-1.419,4.753-3.169C14.753,11.225,13.821,10.227,12.443,9.672z M10,5.247c1.094,0,1.98,1.242,1.98,2.773c0,1.531-0.887,2.772-1.98,2.772S8.02,9.551,8.02,8.02C8.02,6.489,8.906,5.247,10,5.247z M10,14.753c-2.187,0-3.96-1.063-3.96-2.377c0-0.854,0.757-1.596,1.885-2.015c0.508,0.745,1.245,1.224,2.076,1.224s1.567-0.479,2.076-1.224c1.127,0.418,1.885,1.162,1.885,2.015C13.961,13.689,12.188,14.753,10,14.753z M10,0.891c-5.031,0-9.109,4.079-9.109,9.109c0,5.031,4.079,9.109,9.109,9.109c5.031,0,9.109-4.078,9.109-9.109C19.109,4.969,15.031,0.891,10,0.891z M10,18.317c-4.593,0-8.317-3.725-8.317-8.317c0-4.593,3.724-8.317,8.317-8.317c4.593,0,8.317,3.724,8.317,8.317C18.317,14.593,14.593,18.317,10,18.317z"></path>
            </svg></a></li>
</ul>
<br>
<br>
<br>
<br>
<br>
<h1 class="glow">CONTACTEZ-NOUS</h1>
<br>
<br>
<br>


<br>
<br>
<div class="main" id="section1">
  <center><h2 style="padding: 100px; background-color: orangered; font-family: Courier New;">Nous sommes ceux qui ont étudié sur l'aquarium et mis en place tout les éléments nécessaire à sa fabrication et sa maintenance.</h2></center>
  
  
  







</head>
<body>

  <center>
 <div class="page-header">
        <h1>Salut, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Bienvenue sur le site.</h1>
    </div>
    <p>
        
        <a href="logout.php" class="btn btn-danger">Se déconnecter</a>
    </p>

  </center>

<div class="incompris" style="margin-top: 50px; margin-left: 20px; margin-right: 20px; ">  
<div class="flip-card" style="float: right;">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="jalal.jpg" alt="Avatar" style="width:300px;height:500px;">
    </div>
    <div class="flip-card-back">
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <h1 style="font-size: 30px;">MEZTEGMAR JALAL</h1> 
      <br>
      <strong><p style="font-size: 20px; color: red;">Co-fondateur</p> </strong>
      <p>Aime travailler</p>
    </div>
  </div>

</div>
<div class="flip-card" style="float: left;">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="abdel.jpg" alt="Avatar" style="width:300px;height:500px;">
    </div>
    <div class="flip-card-back">
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <h1 style="font-size: 30px;">KABIR ABDELLATIF</h1> 
      <br>
      <strong><p style="font-size: 20px; color: red;">Co-fondateur</p> </strong>
      <p>Aime dormir</p>
    </div>
  </div>
</div>


<center>
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="moi.jpg" alt="Avatar" style="width:300px;height:500px;">
    </div>
    <div class="flip-card-back">
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <h1 style="font-size: 30px;">MEMMADI LOKMEN</h1> 
      <br>
     <strong> <p style="font-size: 20px; color: red;">Fondateur</p> </strong>
      <p>Aime créer des sites</p>
    </div>
  </div>
</div>
</center>
</div>

</div>
<center style="background-color: #ffc0cb" ><a href="mailto:lokmen.memmadi@monlycee.net"><button class="button"style="margin-top: 300px;"><span>E-mail</span></button></a></center>
</body>
</html>
