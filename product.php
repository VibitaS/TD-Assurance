<?php
session_start();

if(isset($_GET['id_product']) ){
    $db = new PDO('mysql:host=' . $_ENV['PHPOOP_DB_HOST'] . ';dbname=' . $_ENV['PHPOOP_DB_NAME'], $_ENV['PHPOOP_DB_USER'], $_ENV['PHPOOP_DB_PASS']);
    $request = $db->prepare('SELECT * FROM product WHERE id=:id');
    $request->execute(array(':id' => $_GET['id_product']));
    $product = $request->fetch();
    //var_dump($product);
    //die;
    ob_start();
    include 'computer.php';
    ob_end_flush();
    ob_get_clean();
}