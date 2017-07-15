<?php
  require_once('connexion.php');

  if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action     = $_GET['action'];
  } else {
    $controller = 'user';
    $action     = 'index';
  }
function getValue($array, $key)
{
    foreach($array as $k=>$value)
    {
        if($k==$key)
        {
            return $value;
        }
    }
    return null;
}

require_once('views/layout.php');
  
 function getURl(){
        $array = parse_url($_SERVER['REQUEST_URI']);
        if(isset($array['path'])){
            $path = $array['path'];
        }else{
            $path = '/';
        }
        return  $path;
    }
?>