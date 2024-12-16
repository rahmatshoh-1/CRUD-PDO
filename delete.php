<?php
    //Подключайм файл с функциями
    include 'functions.php';    
    include 'database/start.php';
    $id = $_GET['id']; 
    $db->delete('posts',$id);
    header('location: index.php');
?>