<?php
    $config = include ('database/start.php');
    include 'QueryBuilder.php';
    include 'Conection.php';
    // Создаем класс и передаем нам PDO 
    $db = new QueryBuilder(Connection::make($config['database']));