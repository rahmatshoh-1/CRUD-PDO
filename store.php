<?php
//Подключайм файл с функциями
include 'functions.php';
include 'database/start.php';

$db->create('posts',[
    'title'=> $_POST['title'],
]);
header('location: index.php');
// var_dump($db);