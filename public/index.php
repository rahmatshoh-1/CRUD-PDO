<?
  $route = strtok($_SERVER['REQUEST_URI'],'?'); 
  
  $routes = [
      '/'=> 'Controllers/home.php',
      '/about'=> 'about.php',
      '/create'=> 'create.php',
      '/show'=>'show.php',
      '/edit'=>'edit.php',
      '/update'=>'update.php',
      '/delete'=>'delete.php',
      '/store'=> 'Controllers/store.php',
  ];
//   var_dump($route);die;
  
  if(array_key_exists($route,$routes)){
      include __DIR__.'/../'.$routes[$route];exit;
  }else{
      var_dump(404);
  }