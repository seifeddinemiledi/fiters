<?php

class UserController {

public function __construct() {
		
}

public function index(){    
    $user=new User();
    $data=$user->getAll();
    require_once('views/user/list.php');
}
public function details(){    
    
    if(isset($_GET['id'])){
    $user=new User();
    $id=$_GET['id'];
    $data=$user->getById($id);
    $cnxs=$user->getNbrConnection($id);
    $books=$user->getNbrBooking($id);
    require_once('views/user/details.php');
    }else{
        $this->index();
    }
}
public function delete(){    
    if(isset($_GET['id'])){
    $user=new User();
    $id=$_GET['id'];
    $user->delete($id);
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
        $d=$_POST['birthDate'];
        $pass=$_POST['password'];
         $user=new User();
         $user->insert($f,$l,$e,$d,$g,$p,$pass);
    $this->index();
    }else{
    require_once('views/user/create.php');
    }
}
public function edit(){    
    if(isset($_GET['id'])){
    $user=new User();
    $id=$_GET['id'];
    if(isset($_POST['submit'])){
        $f=$_POST['firstname'];
        $l=$_POST['lastname'];
        $e=$_POST['email'];
        $p=$_POST['phoneNumber'];
        $d=$_POST['birthDate'];
         $user=new User();
         $user->update($f,$l,$e,$d,$p,$id);
         $this->index();
    }else{
    $data=$user->getById($id);
    require_once('views/user/edit.php');
    }
    }else{
    $this->index();
    }
    
}



}