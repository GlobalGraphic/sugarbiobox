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
<title><?php echo $lang['velkoobchod'] ?></title>
</head>
<body>
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
        <a class="nav-link" href="velkoobchod.php?lang=sk"><?php echo $lang['lang_sk'] ?>&nbsp;&nbsp;/</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="velkoobchod.php?lang=en"><?php echo $lang['lang_en'] ?></a>
      </li>
    </ul>
  </div>  
</nav>
<img src="logo.jpg" alt="Sugarbiobox logo" id="logo"/>

<div class="container">
		<h2><?php echo $lang['ponuka'] ?></h2><br>
		<a href="mailto:#">info@sugarbiobox.com</a><br><br>
		 <abbr title="Phone">+421 918 050 530</abbr><br><br>
		 <p><?php echo $lang['min'] ?></p><br><br><br>
     <p><?php echo $lang['vyroba']?></p>
		 <p><?php echo $lang['katalog'] ?></p>
     <a href="katalog.pdf">Katalóg</a>
</div><br><br>

<!-- Footer -->
<footer class="page-footer font-small bg-light lighten-3 pt-4">
    <div class="footer-copyright text-center py-3" style="color: #048739;">© 2019 Copyright: SugarBioBox<br>
      Code/Design:<a href="https://globalgraphicdesign.eu" target="_blank" style="color: #048739;">&nbsp;Global Graphic & Design</a>
    </div>
</footer>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>