<?php
session_start();
?>
<!doctype html>
<html lang="en">
<!-- Meta tags -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<head>
  <title>TD MonHabitation</title>
  <!-- Links to 1)Bootstrap CSS - 2)Personal CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap-grid.css">
  <link rel="stylesheet" type="text/css" media="all" href="assets/css/style.css"/>
</head>
<body>
  <!-- MAIN CONTENT -->
  <div class="login" id="login" style="display: block;">
    <form action="connexion.php" method="post">
      <div id="logo">
        <img src="assets/img/logoTD.png" width="150" height="150" alt="TD assurance" border="0">
      </div>
      <h3 id="title"><b>MonHabitation</b></h3>
      <div class="spacer"></div>
      <p><input name="login" type="text" required="required" placeholder="login"><br></p>
      <p><input name="password" type="password" required="required" placeholder="password"><br></p>
        <p style="color: red;"><?php if(isset($_SESSION['message'])) echo $_SESSION['message'];?></p>
      <p><input type="submit" value="Connexion" id="btnLogin" onclick=""></p>
    </form>
  </div>
</body>
</html>
