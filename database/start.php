<?php
    $config = include __DIR__.('/../config.php');
    include 'QueryBuilder.php';
    include 'Conection.php';
    // Создаем класс и передаем нам PDO 
   return new QueryBuilder(Connection::make($config['database']));