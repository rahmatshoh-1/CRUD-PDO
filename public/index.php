<?php
    // //Подключайм файл с функциями
    include __DIR__ . '/../functions.php';   
    include __DIR__ .'/../database/start.php';

  
    $routes = [
        '/'=> '/index.php',
        '/about'=> '/about.php',
    ];
    $route = $_SERVER['REQUEST_URI'];

    if(array_key_exists($route,$routes)){
        include __DIR__ .'/../'.$routes[$route];exit;
    }else{
        dd(404);
    }
        // Получаем все посты 
        $posts = $db->getAll('posts');
        // выводим все пости методом foreach
        include __DIR__ .'/../index.view.php';

?>
