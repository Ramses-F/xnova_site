<?php
$server=($_SERVER["PHP_SELF"]);
$pages=explode('/', $server);
$pages = ($pages[count($pages)-1]);
$pages=str_replace('.php','',$pages);
?>
<!DOCTYPE html>
<html lang="en">

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
  <!-- boxed bg -->
  <link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
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
      <div class="hidden-top-inner container">
        <div class="row">
          <div class="span12">
            <ul>
              <li><strong>We are available for any custom works this month</strong></li>
              <li>Main office: Springville center X264, Park Ave S.01</li>
              <li>Call us <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- end toggle top area -->
    <!-- start header -->
    <header>
      <div class="container ">
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
    vertical-align: middle;margin-left:120px;" /></a>
              
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation" style="padding-top: 20px;">
                <nav>
                  <ul class="nav topnav">
                    <li>
                    <li  class="dropdown <?=$pages=="index" ? "active" : "" ?> "> <a href="index.php">Accueil </a></li >
                      
                    </li>
                        <li>
                          <li  class="dropdown <?=$pages=="about" ? "active" : "" ?> "><a href="about.php">Qui sommes nous ?</a></li>
                        </li>
                    <li>
                      
                      <li class="dropdown <?=$pages=="pricingbox" ? "active" : "" ?> "><a href="pricingbox.php">Nos solutions</a></li> 
                      
                    </li>
                    <li>
                      <li class="dropdown <?=$pages=="portfolio-detail" ? "active" : "" ?> "><a href="portfolio-detail.php">Projets</a></li>
                    </li>
                    
        
                    <li class="dropdown <?=$pages=="contact" ? "active" : "" ?> ">
                    <li > <a href="contact.php">Contact </a></li >
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
    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>Qui sommes nous</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="#">Pages</a><i class="icon-angle-right"></i></li>
              <li class="active">Qui sommes nous ?</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span6">
            <h2>Bienvenu chez <strong>Xnova</strong></h2>
            <p>
            <h5><strong> Xnova</strong> est une PME ivoirienne spécialisée dans l’innovation technologique et la transformation digitale des entreprises. 
  
           </h5>
            </p>
            <p>
            <h5> Nous ambitionnons mettre à disposition des marchés africains, des solutions innovantes à forte valeur ajoutée dont le but sera de changer et faciliter les habitudes de consommation des africains. 
Nos équipes sont composées aussi bien de « Marketer », d’ingénieurs en informatique que Designers et d’experts en Marketing digital. 
</h5> </p>
            <p>
            <h5>  Notre esprit de créativité demeure notre atout phare…nous vous attendons chez nous.
            </h5>  
          </p>
          </div>
          <div class="span6">
            <!-- start flexslider -->
            <div class="flexslider">
              <ul class="slides">
                <li>
                  <img src="img/digitalMarketing.jpg" alt="" />
                </li>
                
                <li>
                  <img src="img/application1.jpg" alt="" />
                </li>
                
                <li>
                  <img src="img/application2.jpeg" alt="" />
                </li>
              </ul>
            </div>
            <!-- end flexslider -->
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
        

        <!-- divider -->
  
        <!-- end divider -->
        <div class="row">
          <div class="span6">
            <h4>En savoir plus sur nous</h4>
            <div class="accordion" id="accordion2">
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" style="text-decoration:none;" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                  	1. Ce que nous faisons </a>
                </div>
                <div id="collapseOne" class="accordion-body collapse in">
                  <div class="accordion-inner">
                    <p>
                    <strong> Xnova</strong> propose l’intégration de solutions métier ou de solutions spécifiques
<br/>	Le développement d’applications web et mobile : sites vitrines, sites de e-commerce, applications <br/>
	Le Marketing digital : Publicité digitale, gestion de e-notoriété, Community Management, Social media, Infographie et l’art du visuel…
  <br/>	Les services à valeur ajoutée : SYGESCO & ILICO 
	<br/>Le conseil pour une transformation digitale de votre entreprise
	La formation en Marketing digitale 

                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" style="text-decoration:none;" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
							2. Processus de travail </a>
                </div>
                <div id="collapseTwo" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>
                      Nihil suscipit posidonium eos id. An cetero fierent insolens mel, ex sit rebum falli erroribus. Ius in nemore dolorum officiis. Et vel harum dicant, vix eius persius an. Ex eam malis postea, erat nihil consulatu nam ea. Ex quem dolores euripidis eum,
                      tempor aperiam voluptaria has ad. Ea est persecuti dissentiet voluptatibus, at illum malorum minimum usu eum aeterno tritani.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" style="text-decoration:none;" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
							3. Assurance de la qualité </a>
                </div>
                <div id="collapseThree" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>
                      Vel purto oportere principes ne, ut mel graeco omnesque. Habeo justo congue mei cu, eu est molestie sensibus, oratio tibique ad mei. Admodum consetetur cu eam, nec cu doming prompta inciderint, ne vim ceteros mnesarchum scriptorem. Ex eam malis postea,
                      erat nihil consulatu nam ea. Ex quem dolores euripidis eum, tempor aperiam voluptaria has ad. Et vel harum dicant vix.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" style="text-decoration:none;" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
							4. Ce que nous pouvons offrir </a>
                </div>
                <div id="collapseFour" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>
                      Diam alienum oporteat ad vis, latine intellegebat cu his. Ei eros dicam commodo duo, an assum meliore eam. In sed albucius dissentiet. Sit laudem graece malorum ne, at eam omnesque expetenda pertinacia, tale meliore vim ea. Dolore legere deleniti ius
                      at, mea nibh discere perfecto ex. Mea ea iuvaret eripuit, eos no vivendo intellegat definiebas, patrioque eloquentiam eos et.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="span6">
            <h4>Notre expertise</h4>
            <label>Application web:</label>
            <div class="progress progress-info progress-striped active">
              <div class="bar" style="width: 95%">
              </div>
            </div>
            <label>Apllication mobile:</label>
            <div class="progress progress-success progress-striped active">
              <div class="bar" style="width: 90%">
              </div>
            </div>
            <label>Marketing digitale:</label>
            <div class="progress progress-warning progress-striped active">
              <div class="bar" style="width: 80%">
              </div>
            </div>
            <label>Tranformation digitale :</label>
            <div class="progress progress-danger progress-striped active">
              <div class="bar" style="width: 70%">
              </div>
            </div>
            <label>Intégrations de solutions métier:</label>
            <div class="progress progress-success progress-striped active">
              <div class="bar" style="width:95%">
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
                <li><a href="portfolio-detail.php">Explorez notre portfolio</a></li>
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
