<?php
  $controllers = array('user'=>['index','details','delete','edit','create'],
  'coache'=>['index','details','delete','edit','create'],'place'=>['index','details','delete','edit','create']);
  
                       


  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) {
      case 'user':
       require_once('models/User.php');
        $controller = new UserController();
      break;
      case 'coache':
       require_once('models/Coache.php');
       $controller = new CoacheController();
       break;
       case 'place':
       require_once('models/Place.php');
       $controller = new PlaceController();
       break;
     
      case 'pages':
        $controller = new PagesController();
      break;
    }
    $controller->{ $action }();
  }

  
  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('pages', 'error');
    }
  } else {
    call('pages', 'error');
  }
?>