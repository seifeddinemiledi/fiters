<?php
class PlaceController {

public function __construct() {
		
}

public function index(){    
    $place=new Place();
    $data=$place->getAll();
    require_once('views/places/list.php');
}
public function create(){    
    if(isset($_POST['submit'])){
        $n=$_POST['name'];
        $a=$_POST['address'];
        $s=$_POST['start_time'];
        $e=$_POST['end_time'];
       
         $place=new Place();
         $place->insert($n,$a,$s,$e);
    $this->index();
    }else{
    require_once('views/places/create.php');
    }
}
}


?>