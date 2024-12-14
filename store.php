<?php
//Подключайм файл с функциями
include 'functions.php';
include 'database/start.php';

$db->create('posts',[
    'title'=> $_POST['title'],
]);
header('location: /crud/public/index.php');
// var_dump($db);