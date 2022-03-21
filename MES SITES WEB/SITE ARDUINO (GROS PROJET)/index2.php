<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit(); 
  }
?>



<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>ARDUIFY</title>
        <link rel="icon" type="image/x-icon" href="lll.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
         <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="index2.php"><img src="download (2).svg " alt="" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                       
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Produit</a></li>
                        
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                        <li li class="nav-item"><div class="sucess">
    <a href="logout.php" class="nav-link js-scroll-trigger">Déconnexion</a>
    
    <h1 style="vertical-align: inherit;font-size: x-small;color: white;">Bienvenue <?php echo $_SESSION['username']; ?> !</h1>
    </div></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- Masthead-->
        <header class="masthead2">

            <div class="container">
               
            </div>
        </header>
        <!-- Services-->

         <P style="vertical-align: inherit;font-size: 50px;color: black;text-align: center; font-family: fantasy;margin-top: 30px"> <?php echo $_SESSION['username']; ?> !</P>
<section class="page-section" id="portfolio">
          













<TABLE  width=30% border=5 style="
    
    background: transparent;
    float: right;
    border-right-width: 0px;
    border-top-width: 0px;
    border-left-width: 0px;
    border-bottom-width: 0px;
    margin-right: 30px;
    ">
<TR>




















   
<div class="dropdown" style=" 
    float: right;
    margin-right: 70px;"><div class="button-container-2">
    <span class="mas"></span>
  
 <button type="button" name="Hover">
       <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
<input type="image" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" border="0" name="submit"><span class="text" style="color: white; font-size: 30px">ACHETER  
<img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
</form>
    <span class="text" style="color: white; font-size: 30px">ACHETER</span></button>
    <span class="line -right"></span>
    <span class="line -top"></span>
    <span class="line -left"></span>
    <span class="line -bottom"></span>
  </a></div>





<style>
/* Popup container - can be anything you want */
.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  

}

/* The actual popup */
.popup .popuptext {

    visibility: hidden;
    width: 800px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 30px;
    padding: 8px 0;
    /* position: absolute; */
    z-index: 1;
    /* bottom: 125%; */
    /* left: 50%; */
    /* margin-left: -80px; */
    /* background: 50% 50% no-repeat rgba(255, 255, 255); */
    /* cursor: wait; */
    /* height: 100%; */
    left: 0;
    position: fixed;
    top: 0;
    /* width: 100%; */
    margin-left: 300px;
    margin-top: 40px;
    z-index: 9998;
}


/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;

}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}
</style>


<div class="popup" onclick="myFunction()"><div class="zoom"><img src="abou1.jpg" style="width: 300px"></div></TD>
  <span class="popuptext" id="myPopup">PHOTO NON CONTRACTUELLE<img src="abou1.jpg"style="width: 700px;" ></span>
</div>

  

<script>
// When the user clicks on div, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>




  <span style="display: flow-root; text-align: center; border-color:#959698;border-style: dashed;border-width: 20px; font-size: 35px; background-color: #959698; font-family: monospace;">37.18€ TTC</span><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
<input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne" style="padding-left: 60px; padding-top: 20px">
<img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
</form>

  <div class="dropdown-content">
  
  
 <div class="stickyHeader__container">
 
  





</TR>
</TABLE>
 
</div>

</div>

</head>
<body>


<div class="loader">

</div>
<script>
jQuery(window).load(function(){ jQuery(".loader").delay(3000).fadeOut("200"); });
</script>

<button class="tablink" onclick="openPage('Avis', this, '#5f9ea0')">Avis <strong>(2)</strong></button>
<button class="tablink" onclick="openPage('Présentationduproduit', this, '#5f9ea0')" id="defaultOpen">Présentation du produit</button>
<button class="tablink" onclick="openPage('Motdelamarque', this, '#5f9ea0')">Mot de la marque</button>
<button class="tablink" onclick="openPage('Prix', this, '#5f9ea0')">Prix</button>


<div id="Avis" class="tabcontent">
    <h3>Anonyme</h3>
  <I>Fonctionne très bien ! Je recommande.</I> <br><span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<br> <br><h3>Anonyme</h3><I>Pas eu de problèmes!
plus rapide que certains sites de commande </I><br>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>

</div>

<div id="Présentationduproduit" class="tabcontent" style="overflow: auto;
    height: 420px;">
    <h2 style="color: #ffffff">Caractéristiques principales :</h2><br><br>

<ul style="color: black">
    <h5 style="text-decoration: underline;color: #ffffff">Carte Arduino :</h5><br>
    <li>Alimentation :<br>
    &nbsp; &nbsp; - via port USB ou<br>
    &nbsp; &nbsp; -&nbsp;7 à 12 V sur connecteur alim&nbsp;5,5 x 2,1 mm</li>
    <li>Microprocesseur: ATMega328</li>
    <li>Mémoire flash: 32 kB</li>
    <li>Mémoire SRAM: 2 kB</li>
    <li>Mémoire EEPROM: 1 kB</li>
    <li>Interfaces:<br>
    -&nbsp;14 broches d'E/S dont 6 PWM<br>
    - 6 entrées analogiques 10 bits<br>
    - Bus&nbsp;série, I2C et SPI</li>
    <li>Intensité par E/S: 40 mA</li>
    <li>Cadencement: 16 MHz</li>
    <li>Gestion des interruptions</li>
    <li>Fiche USB B</li>
    <li>Version: Rev. 3</li>
    <li>Site officiel: <a href="https://www.arduino.cc/" target="_blank">www.arduino.cc</a></p><br>
    <h4 style="text-decoration: underline;color: #ffffff">Inclus :</h4><br>
    <li>Ecran LCD</li>
    <li>Capteur de toucher</li>
    <li>Capteur de température</li>
    <li>Boîtier</li>

    
</ul>
<B style="color: black" >
Poids: 110g<br>
Module prêt à l'emploi.<br>
Livré avec support en plastique et boîte assortie.<br>
Version d'origine conçue et assemblée en France.</B><br><br>
<br><br>
1 année  = 0,876 KWH</B><br><br>
                
  <h3 style="color: #ffffff">Sysml</h3>
  <p><img src="ARDUIFY.png"></p> 
  <h3 style="color: #ffffff">Etiquette énergétique</h3>
  <p><img src="PS.PNG"></p> 
</div>

<div id="Motdelamarque" class="tabcontent">
  <h3 style="text-decoration: underline;color: red">Merci !</h3>
  <p>Meilleurs voeux 2021.
Nous vous remercions pour votre présence en 2020,
et vous adressons nos voeux les plus chaleureux pour cette nouvelle année.
Que vos rêves se réalisent et que 2021 soit signe de bonheur et de réussite ! </p><br>
<h4><img src="exc.gif" style="width: 5%">UNE BONNE NOTE EST ATTENDUE <img src="exc.gif"style="width: 5%"></h4>
</div>

<div id="Prix" class="tabcontent"style="overflow: auto;
    height: 360px;">
  <h3>Prix :</h3><br>
  <p>Coût des matériaux : 20.00€</p><br>
  <p>Coût de production : 0.80€</p><br>
  <p>Coût de livraison : 3.00€</p><br>
  <p>Coût de projet : 10.00€</p><br>
  <p>TVA (10%) : 3.38€</p><br><br>

  <h3 style="position: relative;"><a class="coco" style="font-size: 30px">TOTAL :  37.18 €  </a></h3>


</div>


<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>











<center>





<video src="mavidéo.mp4" width=1280  height=500 controls poster="transp.png" style="margin-top: 100px"></video>






<section class="portfolio-experiment" style=" padding-top: 65px">
    <div class="button-container-2">
    <span class="mas"></span>
  
 <button type="button" name="Hover">
       <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----MIIH8QYJKoZIhvcNAQcEoIIH4jCCB94CAQExggEwMIIBLAIBADCBlDCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20CAQAwDQYJKoZIhvcNAQEBBQAEgYBKPQ/Own1CNaDdc+0l3w9T0rxjJ0lvxhEp1yOW20hPgrEX/mBxWdgkz1XXMc9hok9IfQ5J2aQYXiZS38MCMmmcbhmd0HtCdGbeCrG97+HxAytHzIij9T6omQYKXpnMHh5LjZIrbpIGeU7O7vL5vbrSNjf09tH7iX7qvgpbMdfXsjELMAkGBSsOAwIaBQAwggFtBgkqhkiG9w0BBwEwFAYIKoZIhvcNAwcECMdu+HGwj/TWgIIBSJzCZJD74k7pB+H6PEMuYKo79YxKZS9b4JGK8NhcYgHPduylb2Rppkpjn3zdTtQwIAPEyqbHH15XW0pzQ1JxafO1MSXMS+0dhlbkfLBgQXhqBRiyp/frKQWG7SbAanYwNGGMcBQ+ev7Owwdd/PQ39GTwwMTNuiKvpz+t9ejJBGnHeINch2lCXUGqYtvK1cPBifhCzAHT5Vzc+4NT5B0Metxl8+DZJrbTD32ZiPliB0LndL1SCN3eyQ32pMaEIUIH/0BtH0PkOdK+V6eG9g/jRqOV5vMkmrsQHZhWaArTHOLGVwKO+UqIt9dSyHITiQWnCMrq8BFsgEbMNTwTXF9qlOpsGGOiUHbS4OFgMyv8kpu7Vzzu5vw4bd9M1vd45/WUaxQHMV41FdPM1VSYYMJS0QO3WlH01odPZ4ESdY23s6v9BNGJL9iEBGWgggOHMIIDgzCCAuygAwIBAgIBADANBgkqhkiG9w0BAQUFADCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20wHhcNMDQwMjEzMTAxMzE1WhcNMzUwMjEzMTAxMzE1WjCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20wgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBAMFHTt38RMxLXJyO2SmS+Ndl72T7oKJ4u4uw+6awntALWh03PewmIJuzbALScsTS4sZoS1fKciBGoh11gIfHzylvkdNe/hJl66/RGqrj5rFb08sAABNTzDTiqqNpJeBsYs/c2aiGozptX2RlnBktH+SUNpAajW724Nv2Wvhif6sFAgMBAAGjge4wgeswHQYDVR0OBBYEFJaffLvGbxe9WT9S1wob7BDWZJRrMIG7BgNVHSMEgbMwgbCAFJaffLvGbxe9WT9S1wob7BDWZJRroYGUpIGRMIGOMQswCQYDVQQGEwJVUzELMAkGA1UECBMCQ0ExFjAUBgNVBAcTDU1vdW50YWluIFZpZXcxFDASBgNVBAoTC1BheVBhbCBJbmMuMRMwEQYDVQQLFApsaXZlX2NlcnRzMREwDwYDVQQDFAhsaXZlX2FwaTEcMBoGCSqGSIb3DQEJARYNcmVAcGF5cGFsLmNvbYIBADAMBgNVHRMEBTADAQH/MA0GCSqGSIb3DQEBBQUAA4GBAIFfOlaagFrl71+jq6OKidbWFSE+Q4FqROvdgIONth+8kSK//Y/4ihuE4Ymvzn5ceE3S/iBSQQMjyvb+s2TWbQYDwcp129OPIbD9epdr4tJOUNiSojw7BHwYRiPh58S1xGlFgHFXwrEBb3dgNbMUa+u4qectsMAXpVHnD9wIyfmHMYIBmjCCAZYCAQEwgZQwgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tAgEAMAkGBSsOAwIaBQCgXTAYBgkqhkiG9w0BCQMxCwYJKoZIhvcNAQcBMBwGCSqGSIb3DQEJBTEPFw0yMTAyMjUyMTI5NDZaMCMGCSqGSIb3DQEJBDEWBBTLc56mrdowqtpXFfnuvbmv3kOXtzANBgkqhkiG9w0BAQEFAASBgGiePK6W3P3C4C3Zeo3DOcBuNoi/WTlCWkFTMBTGaGZEhOBx+IkGZAQdVZhoLeITh9vFWOrcyk+kqTHIea7PCFiUoiW5+5BFUTf5i4oevHEwJkpCElKIGrhqagvahIfAGOB0Et2k6Eztw4DtOtBsMs1NwFAiCrV6mFX+YO6GPyXN-----END PKCS7-----">
<input type="image" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" border="0" name="submit"><span class="text" style="color: white; font-size: 30px">ACHETER  
<img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
</form>
    <span class="text" style="color: white; font-size: 30px">ACHETER</span></button>
    <span class="line -right"></span>
    <span class="line -top"></span>
    <span class="line -left"></span>
    <span class="line -bottom"></span>
  </a>
</section></div>
</center>
 </section>

                    
                  
        
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">La TEAM</h2>
                    <h3 class="section-subheading text-muted">Les membres de notre équipe.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                             <img class="mx-auto rounded-circle" src="abdel.jpg" alt="" />
                            <h4>Kabir Abdellatif</h4>
                            <p class="text-muted">Co-fondateur</p>
                            <a class="btn btn-dark btn-social mx-2" href="index3.html"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="index3.html"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="index3.html"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="moi.jpg" alt="" />
                            <h4>Memmadi Lokmen</h4>
                            <p class="text-muted">Fondateur</p>
                            <a class="btn btn-dark btn-social mx-2" href="index3.html"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="index3.html"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="index3.html"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="kyky.jpg" alt="" />
                            <h4>Guinebault Kylane</h4>
                            <p class="text-muted">Co-fondateur</p>
                            <a class="btn btn-dark btn-social mx-2" href="index3.html"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="index3.html"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="index3.html"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Nous avons fourni un grand travail d'équipe, à l'orale et à l'écrit nous restons concentrés !</p></div>
                </div>
            </div>
        </section>
        <!-- Clients-->

        <div class="py-5">
            <div class="text-center">
                    <h2 class="section-heading text-uppercase">En collaboration avec :</h2>
            </div>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 my-3">
                        <img class="img-fluid d-block mx-auto" src="educ.jpg" alt="" />
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <img class="img-fluid d-block mx-auto" src="mr.png" alt="" />
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <img class="img-fluid d-block mx-auto" src="creative-market.jpg" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contactez-nous</h2>
                    <h3 class="section-subheading text-muted">Tu veux + d'infos sur notre projet ?</h3>
                </div>
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Ton nom" required="required" data-validation-required-message="Ton nom et le vrai hein..." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Ton Email *" required="required" data-validation-required-message="Rentre une vrai adresse e-mail STP !" />
                                <p class="help-block text-danger"></p>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" placeholder="Ton message *" required="required" data-validation-required-message="Mets un message c'est obligatoire. Allez mets le !"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Envoyer le message</button>
                    </div>
                </form>



            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left" style="margin-left:  380px">Copyright © LOKMEN  KYLANE  ABDELLATIF</div>
                   
                </div>
            </div>
        </footer>
       
        <!-- Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="cancel.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Arduify</h2>
                                    <p class="item-intro text-muted">Les détails de notre projet</p>
                                    <img class="img-fluid d-block mx-auto" src="abou1.jpg" alt="" />
                                    <p>On a commencé par prendre les dimensions de la carte Arduino ensuite on la modéliser sur SolidWorks puis nous avons programmer, nous avons ajouter l'option de changement de couleur en fonction de la température puis un bouton qui permet d'allumer l'écran LCD lorsqu'on appuie dessus, écologique pour l'environnement puisque l'on économise l'électrécité. Par la suite, nous avons grâce à l'imprimante 3D, imprimé le boîtier et nous avons rassembler le tout. Ce qui nous donne un thermométre.    </p>
                                    <ul class="list-inline">

<br>

<button class="btn1 btn-primary1" data-dismiss="modal" type="button"> Acheter</button>


<br><br><br>

                                         <li>Participants:</li>
                                        <li><strong>MEMMADI LOKMEN</li>
                                        <li>GUINEBAULT KYLANE</li>
                                        <li>KABIR ABDELLATIF</strong></li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Fermer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 6-->
        
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="jqBootstrapValidation.js"></script>
        <script src="contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="scripts.js"></script>

    </body>
</html>
