<?php
    //Подключайм файл с функциями
    include 'functions.php';    
    $db = include 'database/start.php';
    $id = $_GET['id']; 
    $db->delete('posts',$id);
    header('location: /');
?>