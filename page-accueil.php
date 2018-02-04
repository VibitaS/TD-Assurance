<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Meta tags -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Accueil - TD MonHabitation</title>
  <!-- Links to 1)Bootstrap CSS - 2)Personal CSS -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-grid.css" />
  <link rel="stylesheet" type="text/css" media="all" href="assets/css/style.css"/>
</head>
<body>
      <div class="menu">

          <ul>
              <li class="menu-item"><a href="#">
                <!-- MENU BURGER -->
              </a></li>
              <li class="menu-item">Bienvenue <strong><?= $_SESSION['login'];?></strong> | <a href="#">Accueil</a></li>
              <li class="menu-item"><a href="#"></a></li>
              <li class="menu-item"><a href="#"></a></li>
              <li class="menu-item"><a href="#"></a></li>
          </ul>
      </div>
    <div class="container">
      <center>
        <div class="content">
          <div class="content-bloc right"><p>Abonnements</p></div>
          <div class="content-bloc left"><p>Profil</p> </div>
          <div class="content-bloc right"><p>Sinistres</p></div>
          <div class="content-bloc left"><a href="liste.php"><p>Produits assurés</p></a></div>
        </div>
      </center>
    <div class="spacer">&nbsp;</div>
  </div>
</body>
</html>
