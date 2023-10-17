<?php
$server=($_SERVER["PHP_SELF"]);
$pages=explode('/', $server);
$pages = ($pages[count($pages)-1]);
$pages=str_replace('.php','',$pages);

?>
<?php
include("./traite_oeuvre.php");

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>XNOVA-la qualité et l'excellence</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
  <link href="css/jcarousel.css" rel="stylesheet" />
  <link href="css/flexslider.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <!-- Theme skin -->
  <link href="skins/default.css" rel="stylesheet" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/favicon.png" />

  <!-- =======================================================
    Theme Name: Flattern
    Theme URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <div id="wrapper">
    <!-- toggle top area -->
    <div class="hidden-top">
      <div class="hidden-top-inner ">
        <div class="row">
          <div class="span12">
            <ul>
              <li><strong>Nous sommes disponibles pour tous travaux personnalisés ce mois-ci</strong></li>
              <li>Bureau principales: Abidjan Cocody riviéra près de la radio Alpha Blondy </li>
              <li>Appelez-nous <i class="icon-phone"></i>Tel : 225 07872864 </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- end toggle top area -->
    <!-- start header -->
    <header>
      <div class=" ">
        <!-- hidden top area toggle link -->
        <div id="header-hidden-link">
          <a href="#" class="toggle-link" title="Click me you'll get a surprise" data-target=".hidden-top"><i></i>Ouvert</a>
        </div>
        <!-- end toggle link -->
                    <!-- end reset modal -->
          </div>
        </div>
        <div class="row">
          <div class="span4">
            <div class="logo">
              <a href="index.php"><img src="img/logo.png" alt="" class="logo" style="height: auto;
    max-width: 70%;
    vertical-align: middle;margin-left:120px;"/></a>
              
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation" style="padding-top: 20px;">
                <nav>
                  <ul class="nav topnav">
                    <li>
                    <li  class="dropdown <?=$pages=="index" ? "active" : "" ?>"><a href="index.php">Accueil </a></li >
                      
                    </li>
                        <li>
                          <li class="dropdown  <?=$pages=="about" ? "active" : "" ?> "><a href="about.php">Qui sommes nous ?</a></li>
                        </li>
                    <li>
                      
                      <li class="dropdown <?=$pages=="pricingbox" ? "active" : "" ?> "><a href="pricingbox.php">Nos solutions</a></li> 
                      
                    </li>
                    <li>
                      <li class="dropdown <?=$pages=="portfolio-detail" ? "active" : "" ?>"><a href="portfolio-detail.php">Projets</a></li>
                    </li>
                    <li>
                    <li class="dropdown <?=$pages=="contact" ? "active" : "" ?> "> <a href="contact.php">Contact </a><li >
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->
    <section id="featured">
      <!-- start slider -->
      <!-- Slider -->
      <div id="nivo-slider">
        <div class="nivo-slider">
          <!-- Slide #1 image -->
          <img src="img/slides/nivo/bg-1.jpg" alt="" title="#caption-1" />
          <!-- Slide #2 image -->
          <img src="img/slides/nivo/bg-2.jpg" alt="" title="#caption-2" />
          <!-- Slide #3 image -->
          <img src="img/slides/nivo/bg-3.jpg" alt="" title="#caption-3" />
        </div>
        <div class="">
          <div class="row">
            <div class="span12">
              <!-- Slide #1 caption -->
              <div class="nivo-caption" id="caption-1">
                <div>
                  <h2>Xnova <strong>PME de solution digitale</strong></h2>
                  <p>
                    Xnova est une PME ivoirienne spécialisée dans l’innovation technologique et la transformation digitale des entreprises. Nous ambitionnons mettre à disposition des marchés africains, des solutions innovantes à forte valeur ajoutée dont le but sera de changer et faciliter les habitudes de consommation des africains. 
                  </p>
                  <a href="about.php" class="btn btn-theme">Lire la suite</a>
                </div>
              </div>
              <!-- Slide #2 caption -->
              <div class="nivo-caption" id="caption-2">
                <div>
                  <h2>Une équipe <strong>dynamique</strong></h2>
                  <p>
                    Nos équipes sont composées aussi bien de « Marketer », d’ingénieurs en informatique que Designers et d’experts en Marketing digital. 
                  </p>
                  <a href="about.php" class="btn btn-theme">Lire la suite</a>
                </div>
              </div>
              <!-- Slide #3 caption -->
              <div class="nivo-caption" id="caption-3">
                <div>
                  <h2>Une créativité  <strong>débordante</strong></h2>
                  <p>
                    Notre esprit de créativité demeure notre atout phare…nous vous attendons chez nous.
                  </p>
                  <a href="about.php" class="btn btn-theme">Lire la suite</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end slider -->
    </section>
    <section class="callaction">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="big-cta">
              <div class="cta-text">
                <h3>Nous avons créé  de <span class="highlight"><strong>nombreux sites Internet</strong></span> cette année!</h3>
              </div>
              <div class="cta floatright">
                <a class="btn btn-large btn-theme btn-rounded" href="contact.php">Demander un devis</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="content arcordion">
      <div class="container ">
        <div class="row">
          <div class="span12">
            <div class="row">
              <div class="span3">
                
              <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon-briefcase icon-circled icon-64 active"></i>
                  </div>
                  <div class="text box-header">
                  <a class="box-link" data-toggle="collapse" href="#collapseOne" style="text-decoration:none;"> <h6>Corporate business</h6> </a>
                </div>
                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                <div class="box-body">    
                <div class="accordion-inner">    
                 <p>
                 <strong> Xnova  </strong>est une PME ivoirienne spécialisée dans l’innovation technologique et la transformation digitale des entreprises. Nous ambitionnons mettre à disposition des marchés africains, des solutions innovantes à forte valeur ajoutée dont le but sera de changer et faciliter les habitudes de consommation des africains. 
Nos équipes sont composées aussi bien de « Marketer », d’ingénieurs en informatique que Designers et d’experts en Marketing digital. 
Notre esprit de créativité demeure notre atout phare…nous vous attendons chez nous.

                    </p>
                    
                </div>
                </div>
                </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon-desktop icon-circled icon-64 active"></i>
                  </div>
                  <div class="text box-header">
                  <a class="box-link" data-toggle="collapse" href="#collapseFour" style="text-decoration:none;"> <h6>Marketing digitale</h6> </a>
                </div>
                <div id="collapseFour" class="collapse show" data-parent="#accordion">
                <div class="box-body">    
                <div class="accordion-inner">    
                 <p>
                 	Publicité digitale, gestion de e-notoriété, Community Management, Social media, Infographie et l’art du visuel…
                    </p>
                    
                </div>
                </div>
                </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon-beaker icon-circled icon-64 active"></i>
                  </div>
                  <div class="text box-header">
                  <a class="box-link" data-toggle="collapse" href="#collapseTwo" style="text-decoration:none;"> <h6>Developpement </h6> </a>
                </div>
                <div id="collapseTwo" class="collapse show" data-parent="#accordion">
                <div class="box-body">    
                <div class="accordion-inner">    
                 <p>
                 	Nous concevons des sites vitrines, des boutiques en ligne, et des applications mobiles indispensables à votre visibilité et à la portabilité de vos outils. 
                    </p>
                    
                </div>
                </div>
                </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon-coffee icon-circled icon-64 active"></i>
                  </div>
                  <div class="text box-header">
                  <a class="box-link" data-toggle="collapse" href="#collapseThree" style="text-decoration:none;"> <h6>Intégration de solution</h6> </a>
                </div>
                <div id="collapseThree" class="collapse show" data-parent="#accordion">
                <div class="box-body">    
                <div class="accordion-inner">    
                 <p>
                 <strong>XNOVA</strong> vous accompagne dans la conception et l’implémentation de solutions ITC, de progiciels et de logiciels métiers, spécifiques et intégrés à votre environnement.
                    </p>
                    
                </div>
                </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
        <!-- end divider -->
        <!-- Portfolio Projects -->
        <textarea style="display:none;" id="data_oeuvre"><?= $tabOeuvre ;?></textarea>
        <div class="row">
          <div class="span12">
            <h4 class="heading">Quelques <strong>oeuvres</strong>  récentes</h4>
            <div class="row">
              <section id="projects">
               
              </section>
            </div>
          </div>
        </div>
        <!-- End Portfolio Projects -->
        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
        <!-- end divider -->
        <div class="row">
          <div class="span12">
            <h4><strong>Références </strong></h4>
            <ul id="mycarousel" class="jcarousel-skin-tango recent-jcarousel clients">
              <li>
                <a href="#">
					<img src="img/synergie.png" class="client-logo" alt="" />
					</a>
              </li>
              <li>
                <a href="#">
					<img src="img/autodigit.jpg" class="client-logo" alt="" />
					</a>
              </li>
              <li>
                <a href="#">
					<img src="img/raxol.jpg" class="client-logo" alt="" />
					</a>
              </li>
              
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="bottom">
      <div class="">
        <div class="row">
          <div class="span12">
            <div class="aligncenter">
              <div id="twitter-wrapper">
                <div id="twitter">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="container">
        <div class="row">
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Navigation</h5>
              <ul class="link-list">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="about.php">Qui somme nous?</a></li>
                <li><a href="pricingbox.php">Nos services</a></li>
                <li><a href="portfolio-detail.php">Explorez nos portfolio</a></li>
                <li><a href="contact.php">Entrer en contact avec notre service client</a></li>
              </ul>
            </div>
          </div>
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading"></h5>
              <ul class="link-list">
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
              </ul>
            </div>
          </div>
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading"></h5>
              <div class="flickr_badge">
               
              </div>
              <div class="clear">
              </div>
            </div>
          </div>
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Contactez-nous</h5>
              <address>
								<strong>Cocody - Riviera II  </strong><br>
								 Près de la radio Alpha Blondy ,Abidjan <br>
								 - 25 BP 2379 Abidjan 25
					 		</address>
              <p>
                <i class="icon-phone"></i>Tel : 225 07872864 <br>
                <i class="icon-envelope-alt"></i> xnova@synergiegroup.com
              </p>
            </div>
          </div>
        </div>
      </div>
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p>
                  <span>&copy; XNOVA- All right reserved.</span>
                </p>
                <div class="credits">
                  <!--
                    All the links in the footer should remain intact.
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Flattern
                  -->
                  Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
              </div>
            </div>
            <div class="span6">
              <ul class="social-network">
                <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-pinterest icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Google plus"><i class="icon-google-plus icon-square"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>

  </div>
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="./data/formData.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/jcarousel/jquery.jcarousel.min.js"></script>
  <script src="js/jquery.fancybox.pack.js"></script>
  <script src="js/jquery.fancybox-media.js"></script>
  <script src="js/google-code-prettify/prettify.js"></script>
  <script src="js/portfolio/jquery.quicksand.js"></script>
  <script src="js/portfolio/setting.js"></script>
  <script src="js/jquery.flexslider.js"></script>
  <script src="js/jquery.nivo.slider.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script src="js/jquery.ba-cond.min.js"></script>
  <script src="js/jquery.slitslider.js"></script>
  <script src="js/animate.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="js/custom.js"></script>

</body>
</html>
