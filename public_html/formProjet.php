<?php
if(isset($_SESSION['connect'])){ 
  
?>
<!DOCTYPE html>
<html>

<head>  <meta charset="utf-8">
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
<style>
.input {
    background-color:#f7f7f7;
    transition: 0.8s;
    color: green;
    border-color: #006;
    border-bottom-color: white;
    border-bottom-style: groove;
    border-right:none;
    border-left:none;
    border-top:none;
    border-width:3px;
    width:50%;

}

.input:hover {
    background-color: rgba(55, 71, 79, 0.5);
    transition: 0.8s;
    box-shadow: inset;
    border-bottom-color: red;
}

fieldset {
    margin-bottom: 50px;
    border-color: #02b8dd;
    transition: 2s;
    border-width: 3px;
    border-style: groove;
    width: 121%;
    border-radius: 10px;
}
</style>


<body>
<div class="container">
<p id="info">
			Bonjour <?= $_SESSION['pseudo'] ?><br>
			<a href="disconnection.php">Déconnexion</a>
		</p>


<div class="container mt-5">
    <h2 class="pt-3 text-primary text-center"><?php echo $mode;?> un projet </h2>
    <form action="distr.php?uc=projet&action=valideForm" 
    method="post" class="col-md-6 offset-md-3 border border-primary p-3">
        <div class="form-group">
        <div class="row">
        <div class="row">
            <div class="col-md-2">
                <label for="categorie ">Categorie </label>
                   <input type="text" class="form-control" id="categorie" placeholder="saisir la categorie " 
                   name="categorie"value="<?php if($mode == "Modifier") {echo $leProjet->categorie ;} ?>" > 
            </div>

        <div class="col-md-4">
            <label for="client">client</label>
               <input type="text" class="form-control" id="client" placeholder="saisir le client" 
               name="client"value="<?php if($mode == "Modifier") {echo $leProjet->client ;} ?>" > 
        </div>
        <div class="col-md-3">
            <label for="date_projet">Date du projet</label>
               <input type="date" class="form-control" id="date_projet" placeholder="saisir la date du projet" 
               name="date_projet"value="<?php if($mode == "Modifier") {echo $leProjet->date_projet ;} ?>" > 
        </div>
        <div class="col-md-3">
            <label for="url">url</label>
               <input type="url" class="form-control" id="url" placeholder="saisir l'url" 
               name="url" value="<?php if($mode == "Modifier") {echo $leProjet->url ;} ?>" > 
        </div>
        <div class="col-md-3">
            <label for="text">Description</label>
               <input type="text" class="form-control" id="text" placeholder="saisir description projet" 
               name="text" value="<?php if($mode == "Modifier") {echo $leProjet->text ;} ?>" > 
        </div>
        <div class="col-md-3">
            <label for="legend">Légende des images</label>
               <input type="text" class="form-control" id="text" placeholder="saisir description projet" 
               name="legend" value="<?php if($mode == "Modifier") {echo $leProjet->legend ;} ?>" > 
        </div>
        </div>
        <input type="hidden" id="id_projets" name="num"value="<?php if($mode == "Modifier" ){
           echo $leProjet->id_projets;
         }?>">
        <div class="row mt-5">
            <div class="col"><a href="distr.php?uc=projet&action=listProjet" class="btn btn-warning ">
                Revenir à la liste </a>
            </div>
            
        </div>
        
        <input type="submit"  value="Modifier" name="modifier">
    </form>
</div>
<!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  
  <script src="./data/formdata.js"></script>
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
<?php } else {
      header('location: connection.php?error=1&email=1');
  }
?>