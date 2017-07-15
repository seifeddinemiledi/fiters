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
public function delete(){    
    if(isset($_GET['id'])){
    $place=new Place(); 
    $id=$_GET['id'];
    $place->delete($id);
    }
    $this->index();
    
}
public function edit(){    
    if(isset($_GET['id'])){
    $place=new Place();
    $id=$_GET['id'];
    if(isset($_POST['submit'])){
        $n=$_POST['name'];
        $a=$_POST['address'];
        $s=$_POST['start_time'];
        $e=$_POST['end_time'];
        
         $place=new Place();
         $place->update($n,$a,$s,$e,$id);
         $this->index();
    }else{
    $data=$place->getById($id);
    require_once('views/places/edit.php');
    }
    }else{
    $this->index();
    }
    
}
public function details(){    
    
    if(isset($_GET['id'])){
    $place=new Place();
    $id=$_GET['id'];
    $data=$place->getById($id);
    
    require_once('views/places/details.php');
    }else{
        $this->index();
    }
}
}


?>