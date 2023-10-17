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

    <div class=" row pt-3">
        <div class="col-9"> <h2 text-primary>Liste des Projets </h2></div>
        <div class="col-3 offset-md-9"><a href="projets.php" class='btn btn-success'>
            <i class="fas fa-plus-circle"></i> Créer un Projet </a>  </div>
        <div class="col-3 offset-md-9"><a href="distr.php?uc=image&action=recupImage" class='btn btn-success'>
            <i class="fas fa-plus-circle"></i> Liste des images </a>  </div>
    </div>
        
    <table class="table table-hover table-striped">
        <thead>
            <tr class="d-flex">
                <th scope="col" class="col-md-1">Catégories</th>
                <th scope="col" class="col-md-1">Client</th>
                <th scope="col" class="col-md-2">Date projet</th>
                <th scope="col" class="col-md-3">url du projet</th>
                <th scope="col" class="col-md-3">Description</th>
                <th scope="col" class="col-md-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
    foreach($lesProjets as $projet){
        echo "<tr class='d-flex'>";
        echo "<td class='col-md-1'>".$projet->categorie."</td>";
        echo "<td class='col-md-1'>".$projet->client."</td>";
        echo "<td class='col-md-2'>".$projet->date_projet."</td>";
        echo "<td class='col-md-3'>".$projet->url."</td>";
        echo "<td class='col-md-3'>".$projet->text."</td>";
        echo "<td class='col-md-2'>
            <a href='distr.php?uc=projet&action=update&num=".$projet->id_projets."' class='btn btn-block btn-primary'><i class='fas fa-pen'>Modifier</i></a>
            <a href='#modalSuppression' data-toggle='modal' data-message='Voulez vous supprimer ce projet ?' data-suppression ='distr.php?uc=projet&action=delete&num=".$projet->id_projets."' class='btn btn-block btn-danger'><i class='far fa-trash-alt'>Supprimer</i></a>
        </td>";
        echo "</tr>";
    }
    
    ?>

        </tbody>
    </table>
    
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