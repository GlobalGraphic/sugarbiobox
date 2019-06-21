<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="sk">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Všetky naše produkty sú vyrobené zo 100% biologických rastlinných vlákien z cukrovej trstiny a pšeničnej vlákniny.">
<meta name="robots" content="index, follow">
<meta name="keywords" content="bio,bio riad, cukrova trstina,cukrova,vyroba riadu">
<meta name="author" content="Global Graphic & Design">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<link rel="icon" href="logo.jpg" type="image/gif" sizes="16x16">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" type="text/css" href="animate.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<title><?php echo $lang['title'] ?></title>
<script src="js/wow.min.js"></script>
<script>
  new WOW().init();
</script>
</head>
<body>
<div id="main">
<nav id="menu" class="navbar navbar-expand-md bg-white navbar-light fixed-top">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php"><?php echo $lang['domov'] ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="produkty.php"><?php echo $lang['produkty'] ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="velkoobchod.php"><?php echo $lang['velkoobchod'] ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="kontakt.php"><?php echo $lang['kontakt'] ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?lang=sk"><?php echo $lang['lang_sk'] ?>&nbsp;&nbsp;/</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?lang=en"><?php echo $lang['lang_en'] ?></a>
      </li>
    </ul>
  </div>  
</nav>
<img src="logo.jpg" alt="Sugarbiobox logo" id="logo"/>

<h1 class="text-center slideInDown animated"><?php echo $lang['description'] ?></h1>
 <p class="text-center slideInDown animated" id="chacha"><?php echo $lang['description2'] ?></p><br><br>


      <div class="container">
        <div class="row">
         <div class="col text-center">
          <a href="produkty.php"><button class="btn btn-primary slideInDown animated delay-1s" id="learnMore" name="btn"><?php echo $lang['viac'] ?></button></a>
          <a href="kontakt.php"><button class="btn btn-primary slideInDown animated delay-1s" id="meetUs" name="btn"><?php echo $lang['kontakt2'] ?></button></a>
        </div>
        </div>
      </div>

<img src="img/foto2.jpg" alt="foto1" class="img-fluid">
	
<h2 class="text-center wow slideInDown animated" id="vis"><?php echo $lang['produkty2'] ?></h2>
<p class="text-center wow slideInDown animated" id="ref"><?php echo $lang['presvedcte'] ?></p><br><br>

<div class="container prod">
	<div class="row">
	<div class="col-md-6 wow slideInDown animated">
		<ul>
			<li><?php echo $lang['option1'] ?></li>
			<li><?php echo $lang['option2'] ?></li>
			<li><?php echo $lang['option3'] ?></li>
			<li><?php echo $lang['option4'] ?></li>
			<li><?php echo $lang['option5'] ?></li>
			<li><?php echo $lang['option6'] ?></li>
		</ul>
	</div>
		<div class="col-md-6">
			<img src="img/badge.png" alt="bio badge" class="img-fluid wow slideInDown animated" id="bio_badge" />
		</div>
	</div>
</div><br><br>

<img src="img/foto1.jpg" align="background" class="img-fluid" alt="fotka1">
<h2 class="text-center wow slideInDown animated" id="comp"><?php echo $lang['comp'] ?></h2>
<p class="text-center wow slideInDown animated" id="comp2"><?php echo $lang['comp2'] ?></p><br><br><br>



<!-- Footer -->
<footer class="page-footer font-small bg-light lighten-3 pt-4">
    <div class="footer-copyright text-center py-3" style="color: #048739;">© 2019 Copyright: SugarBioBox<br>
      Code/Design:<a href="https://globalgraphicdesign.eu" target="_blank" style="color: #048739;">&nbsp;Global Graphic & Design</a>
    </div>
</footer>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>