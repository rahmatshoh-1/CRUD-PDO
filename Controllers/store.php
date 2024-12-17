<?php
session_start();
//Подключайм файл с функциями
include '../functions.php';
$db = include '../database/start.php';
if(!isset($_POST['title']) || empty($_POST['title']) ){
    $_SESSION['title'] = 'Поля пустая';
    header("location: /create");
}
$db->create('posts',[
    'title'=> $_POST['title'],
]);

   // выводим все пости методом foreach
header('location: ../');
// var_dump($db);