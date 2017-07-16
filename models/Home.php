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
    
    public function getpayedbooking(){
        $req="SELECT * FROM bookings WHERE step=2";
        $stm=$this->db->prepare($req);
        $stm->execute();
        $data= $stm->fetchAll(PDO::FETCH_ASSOC);
        return count($data);
        
    }
    public function getnotpayedbooking(){
        $req="SELECT * FROM bookings WHERE step=1";
        $stm=$this->db->prepare($req);
        $stm->execute();
        $data= $stm->fetchAll(PDO::FETCH_ASSOC);
        return count($data);
        
    }
    public function sessionstart(){
 $req='SELECT * FROM bookings WHERE "sessionStart" > date_trunc(\'day\',current_timestamp)';
  $stm=$this->db->prepare($req);
      $stm=$this->db->prepare($req);
        $stm->execute();
        $data= $stm->fetchAll(PDO::FETCH_ASSOC);
        return count($data);

    }
    
    public function coachActive(){
 $req='SELECT * FROM bookings WHERE "coachActive" IS TRUE';
  $stm=$this->db->prepare($req);
      $stm=$this->db->prepare($req);
        $stm->execute();
        $data= $stm->fetchAll(PDO::FETCH_ASSOC);
        return count($data);

    }

}
