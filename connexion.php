<?php
session_start();

if (isset($_POST['login']) && isset($_POST['password'])) {

    $login = strip_tags($_POST['login']);
    $password = strip_tags($_POST['password']);

    if (isset(
        $_ENV['PHPOOP_DB_HOST'],
        $_ENV['PHPOOP_DB_NAME'],
        $_ENV['PHPOOP_DB_USER'],
        $_ENV['PHPOOP_DB_PASS']
        //$_ENV['PHPOOP_DB_PORT']
    )) {
        $db = new PDO('mysql:host=' . $_ENV['PHPOOP_DB_HOST'] . ';dbname=' . $_ENV['PHPOOP_DB_NAME'], $_ENV['PHPOOP_DB_USER'], $_ENV['PHPOOP_DB_PASS']);
        $request = $db->prepare('SELECT id, login, password FROM user WHERE login=:login AND password=:password');
        $request->execute(array(':login' => $_POST['login'], ':password' => $_POST['password']));
        if($data=$request->fetch()){
            $_SESSION['id'] = $data['id'];
            $_SESSION['login'] = $data['login'];
            header('Location:page-accueil.php');
        } else {
            $_SESSION['message']='Votre login ou votre mot de passe est incorrecte.';
            header('Location:index.php');
        }


    } else {
        $_SESSION['message'] = 'Erreur de connexion';
        header('Location:index.php');
    }
}

