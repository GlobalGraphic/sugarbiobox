<?php
include 'config.php';

if (isset($_POST['btn'])) {
  
  $msg = "";
/*include_once "phpmailer/PHPMailer.php";
include_once "phpmailer/Exception.php";
include_once "phpmailer/SMTP.php";*/

    $meno = $_POST['meno'];
    $email = $_POST['email'];
    $predmet = $_POST['value'];
    $msg= '<div class="jumbotron">'. $_POST['meno'] . '<br>' . $_POST['email'] .'<br>' . $_POST['sprava'].'</div>';

    require('phpmailer/PHPMailerAutoload.php');
  
      $mail = new PHPMailer();
      $mail->CharSet = "UTF-8";
      $mail->addAddress('info@sugarbiobox.com');
      $mail->setFrom($email);
      $mail->Subject = $predmet;
      $mail->isHTML(true);
      $mail->Body = $msg;

      if ($mail->send()) {
          header("Location: email_gen_msg.html");
      } else{
         //$msg = "Vyskitla sa chyba, skúste to znova!";
        echo 'nastala chyba';
       }
}
?>
<!DOCTYPE html>
<html>
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
<title><?php echo $lang['title2'] ?></title>
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
        <a class="nav-link" href="kontakt.php?lang=sk"><?php echo $lang['lang_sk'] ?>&nbsp;&nbsp;/</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="kontakt.php?lang=en"><?php echo $lang['lang_en'] ?></a>
      </li>
    </ul>
  </div>  
</nav>
<img src="logo.jpg" alt="Sugarbiobox logo" id="logo"/>

<div class="wow fadeInLeft animated" data-delay="0.1">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h2 class=cuheading><?php echo $lang['title2'] ?></h2>
            </div>
        </div>
    </div>
</div>
<form id="contact_form" method="post" class="form-horizontal" action="#">
<div class="container">
    <div class="row">
        <div class="col-md-8">
                <div class="row" id="form_row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                <?php echo $lang['meno'] ?></label>
                            <input type="text" class="form-control" id="name" placeholder="<?php echo $lang['menoplace'] ?>" name="meno" required />
                        </div>
                        <div class="form-group">
                            <label>
                                E-mail</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                <input type="email" class="form-control" placeholder="<?php echo $lang['emailplace'] ?>" autocomplete='email' name="email" required id="mailos" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                <?php echo $lang['predmet'] ?></label>
                            <select id="subject" class="form-control" name="value" required="required">
                                <option value="" selected=""><?php echo $lang['moznosti'] ?></option>
                                <option value="Všeobecný zákaznícky servis"><?php echo $lang['moznostop1'] ?></option>
                                <option value="Návrhy"><?php echo $lang['moznostop2'] ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                <?php echo $lang['sprava'] ?></label>
                            <textarea name="sprava" id="message" class="form-control" rows="9" cols="25" required
                                      placeholder="<?php echo $lang['spravaplace'] ?>"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-primary pull-right" value="<?php echo $lang['valuebtn'] ?>" id="btnContactUs" name="btn">
                    </div>
                </div>
        </div>
        <div class="col-md-4" id="address">
<span class="glyphicon glyphicon-globe"></span>
            <address>
                <strong>Sugarbiobox<br>
                </strong><br>
                Radovan Merta<br>
                Dekýš 146 , Okr. Banská Štiavnica 969 01 <?php echo $lang['lang_sk_1'] ?><br>
                Email: <a href="mailto:#">info@sugarbiobox.com</a><br>
                <abbr title="Phone">
                    Tel.:</abbr>
                +421 918 050 530<br>
            </address>
        </div>
    </div>
</div>
</form><br><br><br>
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