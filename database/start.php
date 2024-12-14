<?php
    $config = include __DIR__ .'/../config.php';    
    include __DIR__ .'/QueryBuilder.php';
    include __DIR__ .'/Conection.php';
    // Создаем класс и передаем нам PDO 
    $db = new QueryBuilder(Connection::make($config['database']));
  