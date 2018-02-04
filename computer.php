<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Listes de Produits assurés - TD MonHabitation</title>
  <link rel="stylesheet" type="text/css" media="all" href="assets/css/style.css"/>
</head>
<body>
<!-- MENU -->
<div class="menu">
    <ul>
        <li class="menu-item"><a href="#">
        </a></li>
    </ul>
</div>
<!-- FIN MENU -->
<!-- CONTENT -->
<center>
  <div class="product">
    <div class="product-info">
      <div class="product-img">
        <img src="assets/img/<?= $product['image']; ?>" alt="Computer model xxx" />
      </div>
      <div class="product-details">
        <h3><?= $product['name']; ?></h3>
        <p>Buy on : <?= $product['purchase_date']; ?></p>
        <p>Insurance money : <?= $product['insurance_money']; ?> $</p>
        <p>Contract started on :  <?= $product['contract_date']; ?></p>
      </div>
    </div>
  </div>
</center>
</body>
</html>
