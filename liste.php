<?php
session_start();

if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
    $db = new PDO('mysql:host=' . $_ENV['PHPOOP_DB_HOST'] . ';dbname=' . $_ENV['PHPOOP_DB_NAME'], $_ENV['PHPOOP_DB_USER'], $_ENV['PHPOOP_DB_PASS']);
    $product =[];
    $request = $db->prepare('SELECT * FROM product WHERE user_id=:user_id');
    $request->execute(array(':user_id' => $_SESSION['id']));
    while($data = $request->fetch()){
        $products[] = $data;
    }
    //var_dump($products);
    //die;
    ob_start();
    include 'produits.php';
    ob_end_flush();
    ob_get_clean();
}

