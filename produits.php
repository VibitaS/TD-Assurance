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
          <!-- MENU BURGER -->
        </a></li>
        <li class="menu-item"><a href="#">Liste de produits assurés</a></li>
        <li class="menu-item"><a href="#"></a></li>
        <li class="menu-item"><a href="#"></a></li>
        <li class="menu-item"><a href="#"></a></li>
    </ul>
</div>
<!-- FIN MENU -->

<!-- CONTENT -->
<div class="container">
  <div class="list-products">
      <?php foreach ($products as $product) : ?>
          <div class="product-card">
              <a href="product.php?id_product=<?=$product['id'];?>"><img src="assets/img/<?=$product['image'];?>" alt="" /></a>
              <div class="card-icons">
                  <ul>
                      <li class="icons"><img src="assets/img/like.svg" alt="favorites" /></li>
                      <li class="icons"><img src="assets/img/file.svg" alt="save" /></li>
                      <li class="icons"><img src="assets/img/dollar-coin-money.svg" alt="price" /></li>
                  </ul>
              </div>
          </div>
      <?php endforeach; ?>
  </div>
</div>
</body>
</html>
