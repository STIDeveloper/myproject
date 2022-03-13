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
<header><a href="welcome.php"><img src="az.gif" style="width: 100%; "></a>
	
	
	<nav>
  <ul>
  	<div class="linear-gradient">
    <li class="deroulant"><a href="welcome.php">Menu &ensp;</a>
      <ul class="sous">
      	<li><a href="welcome.php">ACCUEIL</a></li>
        <li><a href="ecommerce.php">E-COMMERCE</a></li>
        <li><a href="vpn.php">VPN</a></li>
        <li><a href="FORUM.php">FORUM</a></li>
        <li><a href="RECHERCHE.php">RECHERCHER</a></li>
        <li><a href="FILM.php">FILM</a></li>
        
      </ul>
    </li>
</div>
    </nav>
</header>
<body style="background-color: #b3abab">



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
  

 
<center>
<div class="col-xs-12 col-sm-6" id="main-container" style="width: 100%;"> 
<section class="default-section" id="tags-gallery-section" data-title="The best francais memes :) Memedroid"><header class="default-section-header grey-background"><h1 id="re">Page de memes français</h1></header><div class="gallery-memes-container">


  <article id="article-item-3203691" class="gallery-item"><div class="item-aux-container"><header class="item-header" data-ts="1610649025"><h1><a class="item-header-title dyn-link" data-title-container="#item-detail-section" href="/memes/detail/3203691/Omg?refGallery=tags&amp;page=1&amp;tag=francais">Omg</a></h1>
<div class="header-item-info green-3">
By <a href="/user/view/Moipastoi" class="dyn-link" data-title-container="#user-profile-section" rel="author">Moipastoi</a>
<time datetime="2021-01-14T13:30:25">2021-01-14 19:30</time>
</div></header><a href="/memes/detail/3203691/Omg?refGallery=tags&amp;page=1&amp;tag=francais" class="dyn-link" data-title-container="#item-detail-section"><img src="https://images7.memedroid.com/images/UPLOADED923/600074419c4fc.jpeg" class="img-responsive" alt="Omg - meme"></a>
</div></article>

</div>
















<article id="article-item-3182718" class="gallery-item"><div class="item-aux-container"><header class="item-header" data-ts="1608926406"><h1><a class="item-header-title dyn-link" data-title-container="#item-detail-section" href="/memes/detail/3182718/French-couisine-xD?refGallery=tags&amp;page=1&amp;tag=francais">French couisine xD</a></h1>
<div class="header-item-info green-3">
By <a href="/user/view/Deejaybb" class="dyn-link" data-title-container="#user-profile-section" rel="author">Deejaybb</a>
<time datetime="2020-12-25T15:00:06">2020-12-25 21:00</time>
</div></header><a href="/memes/detail/3182718/French-couisine-xD?refGallery=tags&amp;page=1&amp;tag=francais" class="dyn-link" data-title-container="#item-detail-section"><img src="https://images3.memedroid.com/images/UPLOADED983/5fe6345e9867e.jpeg" class="img-responsive" alt="French couisine xD - meme"></a>
</div></div>
</article>








<article id="article-item-3177044" class="gallery-item"><div class="item-aux-container"><header class="item-header" data-ts="1608418807"><h1><a class="item-header-title dyn-link" data-title-container="#item-detail-section" href="/memes/detail/3177044/Gogole-trad?refGallery=tags&amp;page=1&amp;tag=francais">Gogole trad</a></h1>
<div class="header-item-info green-3">
By <a href="/user/view/dr.recurse" class="dyn-link" data-title-container="#user-profile-section" rel="author">dr.recurse</a>
<time datetime="2020-12-19T18:00:07">2020-12-20 00:00</time>
</div></header><a href="/memes/detail/3177044/Gogole-trad?refGallery=tags&amp;page=1&amp;tag=francais" class="dyn-link" data-title-container="#item-detail-section"><img src="https://images3.memedroid.com/images/UPLOADED477/5fde6fb4ceb17.jpeg" class="img-responsive" alt="Gogole trad - meme"></a></div></div>
</article>










<article id="article-item-3150453" class="gallery-item"><div class="item-aux-container"><header class="item-header" data-ts="1606309213"><h1><a class="item-header-title dyn-link" data-title-container="#item-detail-section" href="/memes/detail/3150453/Simple?refGallery=tags&amp;page=1&amp;tag=francais">Simple</a></h1>
<div class="header-item-info green-3">
By <a href="/user/view/dr.recurse" class="dyn-link" data-title-container="#user-profile-section" rel="author">dr.recurse</a>
<time datetime="2020-11-25T08:00:13">2020-11-25 14:00</time>
</div></header><a href="/memes/detail/3150453/Simple?refGallery=tags&amp;page=1&amp;tag=francais" class="dyn-link" data-title-container="#item-detail-section"><img src="https://images3.memedroid.com/images/UPLOADED498/5fbe42b58c141.jpeg" class="img-responsive" alt="Simple - meme"></a></div></div></article>













<article id="article-item-3145066" class="gallery-item"><div class="item-aux-container"><header class="item-header" data-ts="1605870004"><h1><a class="item-header-title dyn-link" data-title-container="#item-detail-section" href="/memes/detail/3145066/Hierarchie?refGallery=tags&amp;page=1&amp;tag=francais">Hiérarchie</a></h1>
<div class="header-item-info green-3">
By <a href="/user/view/dr.recurse" class="dyn-link" data-title-container="#user-profile-section" rel="author">dr.recurse</a>
<time datetime="2020-11-20T06:00:04">2020-11-20 12:00</time>
</div></header><a href="/memes/detail/3145066/Hierarchie?refGallery=tags&amp;page=1&amp;tag=francais" class="dyn-link" data-title-container="#item-detail-section"><img src="https://images7.memedroid.com/images/UPLOADED759/5fb78707aa12f.jpeg" class="img-responsive" alt="Hiérarchie - meme"></a></div></div></article>

















<article id="article-item-3141521" class="gallery-item"><div class="item-aux-container"><header class="item-header" data-ts="1605618009"><h1><a class="item-header-title dyn-link" data-title-container="#item-detail-section" href="/memes/detail/3141521/Champ-de-ruine?refGallery=tags&amp;page=1&amp;tag=francais">Champ de ruine</a></h1>
<div class="header-item-info green-3">
By <a href="/user/view/dr.recurse" class="dyn-link" data-title-container="#user-profile-section" rel="author">dr.recurse</a>
<time datetime="2020-11-17T08:00:09">2020-11-17 14:00</time>
</div></header><a href="/memes/detail/3141521/Champ-de-ruine?refGallery=tags&amp;page=1&amp;tag=francais" class="dyn-link" data-title-container="#item-detail-section"><img src="https://images3.memedroid.com/images/UPLOADED877/5fb3bcbeada9d.jpeg" class="img-responsive" alt="Champ de ruine - meme"></a></div></div></article>













<article id="article-item-3115172" class="gallery-item"><div class="item-aux-container"><header class="item-header" data-ts="1603483272"><h1><a class="item-header-title dyn-link" data-title-container="#item-detail-section" href="/memes/detail/3115172/Je-sais-pas-sil-est-passe-sur-le-serveur-anglais-peut-etre?refGallery=tags&amp;page=1&amp;tag=francais">Je sais pas s'il est passé sur le serveur anglais peut-être ?</a></h1>
<div class="header-item-info green-3">
By <a href="/user/view/Deejaybb" class="dyn-link" data-title-container="#user-profile-section" rel="author">Deejaybb</a>
<time datetime="2020-10-23T16:01:12">2020-10-23 22:01</time>
</div></header><a href="/memes/detail/3115172/Je-sais-pas-sil-est-passe-sur-le-serveur-anglais-peut-etre?refGallery=tags&amp;page=1&amp;tag=francais" class="dyn-link" data-title-container="#item-detail-section"><img src="https://images7.memedroid.com/images/UPLOADED639/5f93187a8d3b4.jpeg" class="img-responsive" alt="Je sais pas s'il est passé sur le serveur anglais peut-être ? - meme"></a></div></div></article>









<article id="article-item-3083967" class="gallery-item"><div class="item-aux-container"><header class="item-header" data-ts="1600804823"><h1><a class="item-header-title dyn-link" data-title-container="#item-detail-section" href="/memes/detail/3083967/High-school-be-like?refGallery=tags&amp;page=1&amp;tag=francais">High school be like</a></h1>
<div class="header-item-info green-3">
By <a href="/user/view/Renjiyomo" class="dyn-link" data-title-container="#user-profile-section" rel="author">Renjiyomo</a>
<time datetime="2020-09-22T16:00:23">2020-09-22 22:00</time>
</div></header><a href="/memes/detail/3083967/High-school-be-like?refGallery=tags&amp;page=1&amp;tag=francais" class="dyn-link" data-title-container="#item-detail-section"><img src="https://images3.memedroid.com/images/UPLOADED417/5f6a42fd9c1f3.jpeg" class="img-responsive" alt="High school be like - meme"></a></div></div></article>











<article id="article-item-3073708" class="gallery-item"><div class="item-aux-container"><header class="item-header" data-ts="1599937227"><h1><a class="item-header-title dyn-link" data-title-container="#item-detail-section" href="/memes/detail/3073708/The-goodgood-is-so-good?refGallery=tags&amp;page=1&amp;tag=francais">The goodgood is so good</a></h1>
<div class="header-item-info green-3">
By <a href="/user/view/Renjiyomo" class="dyn-link" data-title-container="#user-profile-section" rel="author">Renjiyomo</a>
<time datetime="2020-09-12T15:00:27">2020-09-12 21:00</time>
</div></header><a href="/memes/detail/3073708/The-goodgood-is-so-good?refGallery=tags&amp;page=1&amp;tag=francais" class="dyn-link" data-title-container="#item-detail-section"><img src="https://images3.memedroid.com/images/UPLOADED290/5f5cbe8d46a78.jpeg" class="img-responsive" alt="The goodgood is so good - meme"></a></div></div></article>















<article id="article-item-3067806" class="gallery-item"><div class="item-aux-container"><header class="item-header" data-ts="1599429606"><h1><a class="item-header-title dyn-link" data-title-container="#item-detail-section" href="/memes/detail/3067806/Je-pense-que-tout-les-gars-font-ca-moi-oui-lel?refGallery=tags&amp;page=1&amp;tag=francais">Je pense que tout les gars font ça (moi oui lel)</a></h1>
<div class="header-item-info green-3">
By <a href="/user/view/Renjiyomo" class="dyn-link" data-title-container="#user-profile-section" rel="author">Renjiyomo</a>
<time datetime="2020-09-06T18:00:06">2020-09-07 00:00</time>
</div></header><a href="/memes/detail/3067806/Je-pense-que-tout-les-gars-font-ca-moi-oui-lel?refGallery=tags&amp;page=1&amp;tag=francais" class="dyn-link" data-title-container="#item-detail-section"><img src="https://images3.memedroid.com/images/UPLOADED404/5f553fa0e4411.jpeg" class="img-responsive" alt="Je pense que tout les gars font ça (moi oui lel) - meme"></a></div></div></article>








<article id="article-item-3054814" class="gallery-item"><div class="item-aux-container"><header class="item-header" data-ts="1598380223"><h1><a class="item-header-title dyn-link" data-title-container="#item-detail-section" href="/memes/detail/3054814/Un-meme-par-ci-par-la?refGallery=tags&amp;page=1&amp;tag=francais">Un meme par ci par là.</a></h1>
<div class="header-item-info green-3">
By <a href="/user/view/Jules17" class="dyn-link" data-title-container="#user-profile-section" rel="author">Jules17</a>
<time datetime="2020-08-25T14:30:23">2020-08-25 20:30</time>
</div></header><a href="/memes/detail/3054814/Un-meme-par-ci-par-la?refGallery=tags&amp;page=1&amp;tag=francais" class="dyn-link" data-title-container="#item-detail-section"><img src="https://images3.memedroid.com/images/UPLOADED94/5f454745a8c23.jpeg" class="img-responsive" alt="Un meme par ci par là."></a></div></div></article>













<article id="article-item-2984676" class="gallery-item"><div class="item-aux-container"><header class="item-header" data-ts="1592319611"><h1><a class="item-header-title dyn-link" data-title-container="#item-detail-section" href="/memes/detail/2984676/masse-de-downvote-au-dernier-commentaire?refGallery=tags&amp;page=1&amp;tag=francais">masse de downvote au dernier commentaire</a></h1>
<div class="header-item-info green-3">
By <a href="/user/view/Raphifou_1201" class="dyn-link" data-title-container="#user-profile-section" rel="author">Raphifou_1201</a>
<time datetime="2020-06-16T11:00:11">2020-06-16 17:00</time>
</div></header><a href="/memes/detail/2984676/masse-de-downvote-au-dernier-commentaire?refGallery=tags&amp;page=1&amp;tag=francais" class="dyn-link" data-title-container="#item-detail-section"><img src="https://images7.memedroid.com/images/UPLOADED728/5ee8b5fc078b5.jpeg" class="img-responsive" alt="masse de downvote au dernier commentaire - meme"></a></div></div>












<article id="article-item-2977240" class="gallery-item"><div class="item-aux-container"><header class="item-header" data-ts="1591707607"><h1><a class="item-header-title dyn-link" data-title-container="#item-detail-section" href="/memes/detail/2977240/Le-retour-des-free-dedicace-Who-whant?refGallery=tags&amp;page=1&amp;tag=francais">Le retour des free dédicace !! Who whant?</a></h1>
<div class="header-item-info green-3">
By <a href="/user/view/Jules17" class="dyn-link" data-title-container="#user-profile-section" rel="author">Jules17</a>
<time datetime="2020-06-09T09:00:07">2020-06-09 15:00</time>
</div></header><a href="/memes/detail/2977240/Le-retour-des-free-dedicace-Who-whant?refGallery=tags&amp;page=1&amp;tag=francais" class="dyn-link" data-title-container="#item-detail-section"><img src="https://images7.memedroid.com/images/UPLOADED320/5edf62cc75cdf.jpeg" class="img-responsive" alt="Le retour des free dédicace !! Who whant? - meme"></a></div></div></article>


































<article id="article-item-2957390" class="gallery-item"><div class="item-aux-container"><header class="item-header" data-ts="1589799636"><h1><a class="item-header-title dyn-link" data-title-container="#item-detail-section" href="/memes/detail/2957390/Ankidroid-meilleur-appli-pour-reviser?refGallery=tags&amp;page=1&amp;tag=francais">Ankidroid meilleur appli pour réviser</a></h1>
<div class="header-item-info green-3">
By <a href="/user/view/Jules17" class="dyn-link" data-title-container="#user-profile-section" rel="author">Jules17</a>
<time datetime="2020-05-18T07:00:36">2020-05-18 13:00</time>
</div></header><a href="/memes/detail/2957390/Ankidroid-meilleur-appli-pour-reviser?refGallery=tags&amp;page=1&amp;tag=francais" class="dyn-link" data-title-container="#item-detail-section"><img src="https://images3.memedroid.com/images/UPLOADED825/5ec21dfc8f5fa.jpeg" class="img-responsive" alt="Ankidroid meilleur appli pour réviser - meme"></a></div></section></div></center>