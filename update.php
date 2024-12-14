<?php
//Подключайм файл с функциями
include 'functions.php';
include 'database/start.php';
$id = $_GET['id'];
$db->update('posts',$_POST,$id);
header('location: /crud/public/index.php');