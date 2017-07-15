<?php

class Home {

    private $db;
 
    public function __construct() {
        $this->db=Db::getInstance();
    }

    public function getNbrUser(){
          $req = "SELECT * FROM users";
        $stm=$this->db->prepare($req);
        $stm->execute();
       $data= $stm->fetchAll(PDO::FETCH_ASSOC);
        return count($data);
    }
    
    public function getNbrCoache(){
          $req = "SELECT * FROM coaches";
        $stm=$this->db->prepare($req);
        $stm->execute();
       $data= $stm->fetchAll(PDO::FETCH_ASSOC);
        return count($data);
    }
    
    public function getNbrPlace(){
          $req = "SELECT * FROM places";
        $stm=$this->db->prepare($req);
        $stm->execute();
       $data= $stm->fetchAll(PDO::FETCH_ASSOC);
        return count($data);
    }
    
    public function getNbrBooking(){
          $req = "SELECT * FROM bookings";
        $stm=$this->db->prepare($req);
        $stm->execute();
       $data= $stm->fetchAll(PDO::FETCH_ASSOC);
        return count($data);
    }
    
    

}
