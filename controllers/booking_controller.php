<?php

class BookingController {

public function __construct() {
		
}

public function index(){    
    $coach=new Booking();
    $data=$coach->getAll();
    require_once('views/booking/list.php');
}
public function details(){    
    
    if(isset($_GET['id'])){
    $b=new Booking();
    $id=$_GET['id'];
    $data=$b->getById($id);
    
    require_once('views/booking/details.php');
    }else{
        $this->index();
    }
}
public function delete(){    
    if(isset($_GET['id'])){
    $b=new Booking(); 
    $id=$_GET['id'];
    $b->delete($id);
    }
    $this->index();
    
}


}