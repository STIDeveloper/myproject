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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bienvenue</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
   
     <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
  <link href="https://img.freepik.com/vecteurs-libre/illustration-du-vecteur-banniere-timbre-cercle_53876-27183.jpg?size=338&ext=jpg" rel="shortcut icon" >
</head>
<header><img src="az.gif" style="width: 1200px;height: 300px;">
<body>
  
  <nav>
  <ul>
    <div class="linear-gradient">
    <li class="deroulant"><a href="#">Menu &ensp;</a>
      <ul class="sous">
        <li><a href="ecommerce.php">E-COMMERCE</a></li>
        <li><a href="vpn.php">VPN</a></li>
        <li><a href="meme.php">MEME</a></li>
        <li><a href="FORUM.php">FORUM</a></li>
        <li><a href="RECHERCHE.php">RECHERCHE</a></li>
        <li><a href="FILM.php">FILM</a></li>
      </ul>
    </li>
</div>
    </nav>
</header>



<body style=" font: 14px sans-serif; text-align: center;"> 

<div class="page-header">
        <h1>Salut, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Bienvenue sur le site.</h1>
    </div>
    <p>
        
        <a href="logout.php" class="btn btn-danger">Se déconnecter</a>
    </p>



<section class="u-align-center u-clearfix u-grey-10 u-section-2" id="sec-6bbf">
      <div class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-sheet-1">
        <div class="u-align-center u-container-style u-group u-group-1">
          <div class="u-container-layout u-valign-bottom u-container-layout-1">
            
            <p class="u-text u-text-body-color u-text-2"><p class="fondp">Tous vos sites en <strong>un</strong> !</p></p>
          </div>
        </div>
        <div class="u-expanded-width u-list u-repeater u-list-1">
          <div class="u-container-style u-custom-background u-list-item u-palette-1-base u-repeater-item u-shape-round u-list-item-1">
            <div class="u-container-layout u-similar-container u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xl u-container-layout-2">
              <span class="u-icon u-icon-circle u-spacing-23 u-text-grey-40 u-white u-icon-1">
                <svg class="svg-icon" viewBox="0 0 20 20">
              <path d="M18.125,15.804l-4.038-4.037c0.675-1.079,1.012-2.308,1.01-3.534C15.089,4.62,12.199,1.75,8.584,1.75C4.815,1.75,1.982,4.726,2,8.286c0.021,3.577,2.908,6.549,6.578,6.549c1.241,0,2.417-0.347,3.44-0.985l4.032,4.026c0.167,0.166,0.43,0.166,0.596,0l1.479-1.478C18.292,16.234,18.292,15.968,18.125,15.804 M8.578,13.99c-3.198,0-5.716-2.593-5.733-5.71c-0.017-3.084,2.438-5.686,5.74-5.686c3.197,0,5.625,2.493,5.64,5.624C14.242,11.548,11.621,13.99,8.578,13.99 M16.349,16.981l-3.637-3.635c0.131-0.11,0.721-0.695,0.876-0.884l3.642,3.639L16.349,16.981z"></path>
            </svg>
                
              </span>
              <div class="u-border-radius-0 u-container-style u-expanded-width u-group u-shape-rectangle u-white u-group-2">
                <div class="u-container-layout u-valign-top u-container-layout-3">
                  <h2 class="u-custom-font u-font-oswald u-text u-text-grey-30 u-text-3">1</h2>
                  <p class="u-text u-text-4" style="    font-size: 15px;
">Vous trouverez les meilleurs sites. Fini ! Les recherches interminables. </p>
                </div>
              </div>
            </div>
          </div>
          <div class="u-align-center u-container-style u-custom-background u-list-item u-palette-2-base u-repeater-item u-shape-round u-list-item-2">
            <div class="u-container-layout u-similar-container u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xl u-container-layout-4">
              <span class="u-icon u-icon-circle u-spacing-23 u-text-grey-40 u-white u-icon-2">
                <svg class="svg-icon" viewBox="0 0 20 20">
              <path d="M10.25,2.375c-4.212,0-7.625,3.413-7.625,7.625s3.413,7.625,7.625,7.625s7.625-3.413,7.625-7.625S14.462,2.375,10.25,2.375M10.651,16.811v-0.403c0-0.221-0.181-0.401-0.401-0.401s-0.401,0.181-0.401,0.401v0.403c-3.443-0.201-6.208-2.966-6.409-6.409h0.404c0.22,0,0.401-0.181,0.401-0.401S4.063,9.599,3.843,9.599H3.439C3.64,6.155,6.405,3.391,9.849,3.19v0.403c0,0.22,0.181,0.401,0.401,0.401s0.401-0.181,0.401-0.401V3.19c3.443,0.201,6.208,2.965,6.409,6.409h-0.404c-0.22,0-0.4,0.181-0.4,0.401s0.181,0.401,0.4,0.401h0.404C16.859,13.845,14.095,16.609,10.651,16.811 M12.662,12.412c-0.156,0.156-0.409,0.159-0.568,0l-2.127-2.129C9.986,10.302,9.849,10.192,9.849,10V5.184c0-0.221,0.181-0.401,0.401-0.401s0.401,0.181,0.401,0.401v4.651l2.011,2.008C12.818,12.001,12.818,12.256,12.662,12.412"></path>
            </svg>
              </span>
              <div class="u-border-radius-0 u-container-style u-expanded-width u-group u-shape-rectangle u-video-cover u-white u-group-3">
                <div class="u-container-layout u-valign-top u-container-layout-5">
                  <h2 class="u-custom-font u-font-oswald u-text u-text-default u-text-grey-30 u-text-5">2</h2>
                  <p class="u-text u-text-default u-text-6" style="    font-size: 15px;
">Vous gagnez des minutieuses minutes, voirs des heures grâce à l'annuaire !</p>
                </div>
              </div>
            </div>
          </div>
          <div class="u-align-center u-container-style u-custom-background u-list-item u-palette-3-base u-repeater-item u-shape-round u-list-item-3">
            <div class="u-container-layout u-similar-container u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xl u-container-layout-6">
              <span class="u-icon u-icon-circle u-spacing-23 u-text-grey-40 u-white u-icon-1">
                <svg class="svg-icon" viewBox="0 0 20 20">
              <path d="M17.659,3.681H8.468c-0.211,0-0.383,0.172-0.383,0.383v2.681H2.341c-0.21,0-0.383,0.172-0.383,0.383v6.126c0,0.211,0.172,0.383,0.383,0.383h1.532v2.298c0,0.566,0.554,0.368,0.653,0.27l2.569-2.567h4.437c0.21,0,0.383-0.172,0.383-0.383v-2.681h1.013l2.546,2.567c0.242,0.249,0.652,0.065,0.652-0.27v-2.298h1.533c0.211,0,0.383-0.172,0.383-0.382V4.063C18.042,3.853,17.87,3.681,17.659,3.681 M11.148,12.87H6.937c-0.102,0-0.199,0.04-0.27,0.113l-2.028,2.025v-1.756c0-0.211-0.172-0.383-0.383-0.383H2.724V7.51h5.361v2.68c0,0.21,0.172,0.382,0.383,0.382h2.68V12.87z M17.276,9.807h-1.533c-0.211,0-0.383,0.172-0.383,0.383v1.755L13.356,9.92c-0.07-0.073-0.169-0.113-0.27-0.113H8.851v-5.36h8.425V9.807z"></path>
            </svg>
              </span>
              <div class="u-border-radius-0 u-container-style u-expanded-width u-group u-shape-rectangle u-video-cover u-white u-group-4">
                <div class="u-container-layout u-valign-top u-container-layout-7">
                  <h2 class="u-custom-font u-font-oswald u-text u-text-default u-text-grey-30 u-text-7">3</h2>
                  <p class="u-text u-text-default u-text-8" style="    font-size: 15px;
">Dans l'annuaire, vous ne trouverez pas seulement des sites mais un forum auquel vous pouriez posé des questions sur diverse sujet. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<div class="callout">
  <div class="callout-header">Merci !</div>
  <span class="closebtn" onclick="this.parentElement.style.display='none';">×</span>
  <div class="callout-container">
    <p style="font-size: 20px;">La plupart des sites proposent des <a href="https://assets.afcdn.com/recipe/20190529/93153_w1024h576c1cx2220cy1728.jpg">cookies  </a> mais moi je veux une très bonne note ! 😁 </p>
  </div>
</div>
<footer>
 
  <center><h3 style="
    margin-bottom: 0px;
">MEMMADI LOKMEN</center>
</footer>
</body>
</html>
</body>
</html>