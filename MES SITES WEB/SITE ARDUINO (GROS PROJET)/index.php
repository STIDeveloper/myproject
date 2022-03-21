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
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="styles.css" rel="stylesheet" />










    </head>











    <body id="page-top" onload="startTime()" onload="startTime1()">


<script>
function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  // add a zero in front of numbers<10
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById("txt").innerHTML = h + ":" + m + ":" + s;
  var t = setTimeout(function(){ startTime() }, 500);
}

function checkTime(i) {
  if (i < 10) {
    i = "0" + i;
  }
  return i;
}
</script>




<div class="loader">

</div>
<script>
jQuery(window).load(function(){ jQuery(".loader").delay(3000).fadeOut("200"); });
</script>











<div class="callout">
  <div class="callout-header"><center>🍪 COOKIE 🍪</center></div>
  <span class="closebtn" onclick="this.parentElement.style.display='none';">X</span>
  <div class="callout-container"><br><br>
    <p>Attention ce site n'attend pas de vous <a href="https://i.giphy.com/media/xT0xeMA62E1XIlup68/giphy.webp" id="AAA"> 🍪 des cookies 🍪</a> mais une  excellente note ! 💯</p><br>
  </div>
</div>













        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="download (2).svg" alt="" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                       
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Projet</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Histoire</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                        <li li class="nav-item"><div class="sucess"><a href="logout.php" class="nav-link js-scroll-trigger">Déconnexion</a>
   
    
     <h1 style="vertical-align: inherit;font-size: x-small;color: white;">Bienvenue <?php echo $_SESSION['username']; ?> !</h1>
    </div></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- Masthead-->
        <header class="masthead1">
            <div class="container">
                <div class="masthead1-subheading">Bienvenue dans notre site !</div>
                <div class="masthead1-heading text-uppercase">Découvrez notre projet</div>





                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services" onclick="myFunction()">Je veux savoir !</a>



<script>
function myFunction() {
  confirm(" ⬇️ SCROLL VERS LE BAS! ⬇️ ");
}
</script>

            </div>
        </header>
        <!-- Services-->

        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Projet</h2>
                    <h3 class="section-subheading text-muted">Notre 1er projet</h3>
                </div>
                <div class="row">
                    
                
                    
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0" style="margin-left: 370px;">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="C.svg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">ARDUIFY</div>
                                
                            </div>
                        </div>
                        <br>

<center>
<section class="portfolio-experiment" style=" padding-top: 65px">
    <div class="button-container-2">
    <span class="mas"></span>
  

  <a href="index2.php"><button type="button" name="Hover">
    <span class="text" style="color: white; font-size: 30px">PAGE PRODUIT</span></button>
    <span class="line -right"></span>
    <span class="line -top"></span>
    <span class="line -left"></span>
    <span class="line -bottom"></span>
  </a>
</section></div>
</center>
 </section>

<br><br><br>
                    </div>
                   
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Histoire</h2>
                    <h3 class="section-subheading text-muted">L'avancé de notre projet</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="abou1.jpg" alt="" style="height: 100%" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Modélisation</h4>
                               
                            </div>
                            <div class="timeline-body"><p class="text-muted">Notre cher camarade GUINEBAULT Kylane a réalisé la conception de la boite sur SolidWorks.  </p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="abou2.png" alt="" style="height: 100%; width: 100%" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Programmation</h4>
                                
                            </div>
                            <div class="timeline-body"><p class="text-muted">Puis MEMMADI Lokmen, a fait la partie programmation sur le logiciel Arduino.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="abou3.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Imprimerie</h4>
                                
                            </div>
                            <div class="timeline-body"><p class="text-muted">Nous avons ensuite imprimés à l'aide de l'imprimante 3D, le boitier.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="abou4.jpg" alt="" style="height: 100%; width: 100%" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Assemblage</h4>
                                
                            </div>
                            <div class="timeline-body"><p class="text-muted">Puis pour terminer, notre camarade KABIR Abdellatif nous a assemblé le tout !</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="abou5.jpg" alt="" style="height: 100%; width: 100%" /></div>
                            
                        </div>
                    </li>
                </ul>
            </div>
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
                <form id="contactForm" name="sentMessage" novalidate="novalidate" enctype="multipart/form-data"
            onsubmit="return validateContactForm()">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group"><span
                    id="userName-info" class="info"></span>
                                <input class="form-control" name="userName"
                    id="userName" type="text" placeholder="Ton nom" required="required" data-validation-required-message="Ton nom et le vrai hein..." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group"><span id="userEmail-info"
                    class="info"></span>
                                <input class="form-control" name="userEmail" id="userEmail" type="email" placeholder="Ton Email *" required="required" data-validation-required-message="Rentre une vrai adresse e-mail STP !" />
                                <p class="help-block text-danger"></p>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0"><span id="userMessage-info"
                    class="info"></span>
                                <textarea class="form-control" name="content" id="content" placeholder="Ton message *" required="required" data-validation-required-message="Mets un message c'est obligatoire. Allez mets le !"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>

 <div class="text-center">
                       
                        <button class="btn btn-primary btn-xl text-uppercase"  name="send" id="sendMessageButton" type="submit">Envoyer le message</button>

                         <div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
                    </div>




                </form>

<script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("#userName").val();
            var userEmail = $("#userEmail").val();
            var content = $("#content").val();
            
            if (userName == "") {
                $("#userName-info").html("Required.");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("Required.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("Invalid Email Address.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (content == "") {
                $("#userMessage-info").html("Required.");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
</script>



<center>

<script type="text/javascript">
    
$( document ).ready(function() {
    $(".cta").click(function() {
         $("form").slideDown(250);
         // if form is visible
         if ($("form").is(":visible")) {
             // change .cta cursor to default
             $(".cta").css('cursor', 'default');
         }
         $("#email").focus();
     });
});



</script>


<style type="text/css"> 





.optin-container {
  box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
  width: 30rem;
}

.cta {
  background: #E52B50;
  color: white;
  cursor: pointer;
  display: block;
  font-size: 2rem;
  line-height: 1;
  padding: 1.75rem 1rem;
  text-align: center;
  text-decoration: none;
  width: 100%;
}
@media screen and (max-width: 600px) {
  .cta {
    line-height: 1.4;
    padding: 1.25rem 1rem;
  }
}


form input {
  padding: 0.75rem;
  margin: 0;
}
form input[type=email] {
  border: none;
  font-size: 1rem;
  flex: 1;
  outline: #E52B50;
}
form input[type=email]:focus {
  outline: 0.25rem solid #E52B50;
}
form input[type=submit] {
  background: linear-gradient(#e84263, #e52b50);
  cursor: pointer;
  color: white;
  border: none;
  font-size: 1rem;
  margin: 0 0 0 1rem;
  padding: 0 3rem;
  transition: all 0.25s ease-in-out;
}
form input[type=submit]:hover {
  background: linear-gradient(#e84667, #e63054);
}
@media screen and (max-width: 600px) {
  form {
    flex-flow: row wrap;
  }
  form input {
    padding: 1rem !important;
    margin: 0 !important;
    flex: 100%;
  }
  form input[type=submit] {
    margin-top: 1rem !important;
  }
}

.hidden{
  display: none
  }
  
  </style>


      <div class="optin-container" style="margin-top: 100px">
    <div class="cta">Inscrivez-vous à la Newsletter</div>

    <form class="form hidden" style="background: #9C2542;
    display: flex;
    flex-flow: row nowrap;
    padding: 1rem;">
        <input type="email" id="email" name="email" placeholder="BONNENOTE@gmail.com" />
        <input type="submit" value="S'inscrire" />
    </form> 



    
</div><!--end .container-->
</center>

            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    
                    <div class="col-lg-4 text-lg-left" style="margin-left:  380px">Copyright © LOKMEN  KYLANE  ABDELLATIF</div><div id="txt" style="margin-left: 310px; font-weight: bolder;"></div>
 <div class="slider">
                    <marquee behavior="scroll" direction="left" scrollamount="7">
                      <div class="slide-track" style="margin-top: 20px">
                          <span>Après plus d'un mois de travail acharné sur ce site, jour et nuit, sans relâche. Nous avons enfin pu aboutir à un excellent résultat !  Alors pourquoi tu lis encore ? Va fouiller les différents recoins du site, des surprises t'attendent. Ah oui ! et aussi <span style="font-weight: bolder;"> <img src="https://img.icons8.com/ios/50/000000/happy--v2.png"/>   METS EXCELLENTE NOTE !</span><img src=" https://img.icons8.com/ios/50/000000/happy--v2.png"/>    </span>
                          
                      </div>
                    </marquee>
                </div>
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

                                         <li>Participants:</li>
                                        <li><strong>MEMMADI LOKMEN</li>
                                        <li>GUINEBAULT KYLANE</li>
                                        <li>KABIR ABDELLATIF</strong></li>
                                    </ul>


<center>
<section class="portfolio-experiment" style=" padding-top: 65px">
    <div class="button-container-2">
    <span class="mas"></span>
  

  <a href="index2.php"><button type="button" name="Hover">
    <span class="text" style="color: white; font-size: 30px">PAGE PRODUIT</span></button>
    <span class="line -right"></span>
    <span class="line -top"></span>
    <span class="line -left"></span>
    <span class="line -bottom"></span>
  </a>
</section></div>

</center>
 </section><br>

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
