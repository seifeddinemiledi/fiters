<?php

class CoacheController {

public function __construct() {
		
}

public function index(){    
    $coach=new Coache();
    $data=$coach->getAll();
    require_once('views/coache/list.php');
}
public function details(){    
    
    if(isset($_GET['id'])){
    $coache=new Coache();
    $id=$_GET['id'];
    $data=$coache->getById($id);
    $cnxs=$coache->getNbrConnection($id);
    $books=$coache->getNbrBooking($id);
    require_once('views/coache/details.php');
    }else{
        $this->index();
    }
}
public function delete(){    
    if(isset($_GET['id'])){
    $coache=new Coache();
    $id=$_GET['id'];
    $coache->delete($id);
    }
    $this->index();
    
}
public function create(){    
    if(isset($_POST['submit'])){
        $f=$_POST['firstname'];
        $l=$_POST['lastname'];
        $e=$_POST['email'];
        $p=$_POST['phoneNumber'];
        $g=$_POST['gender'];
        $pass=$_POST['password'];
         $coache=new Coache();
         $coache->insert($f,$l,$e,$g,$p,$pass);
    $this->index();
    }else{
    require_once('views/coache/create.php');
    }
}
public function edit(){    
    if(isset($_GET['id'])){
    $coache = new Coache();
    $id=$_GET['id'];
    if(isset($_POST['submit'])){
        $f=$_POST['firstname'];
        $l=$_POST['lastname'];
        $e=$_POST['email'];
        $p=$_POST['phoneNumber'];
       
         $coache=new Coache();
         $coache->update($f,$l,$e,$p,$id);
         $this->index();
    }else{
    $data=$coache->getById($id);
    require_once('views/coache/edit.php');
    }
    }else{
    $this->index();
    }
    
}



}