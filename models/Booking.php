<?php

class Booking {

    private $db;
 
    public function __construct() {
        $this->db=Db::getInstance();
    }
    
    

     function getAll(){
        $req = 'SELECT b.id,  u.firstname AS user_f, u.lastname AS user_l,'.
        ' c.firstname AS coache_f, c.lastname AS coache_l,'.
        ' p.address,p.start_time,p.end_time'.  
        ' FROM bookings b INNER JOIN users u ON b."userId"=u.id'.
        ' INNER JOIN coaches c ON b."coachId"=c.id '.
        ' INNER JOIN places p ON b."placeId"=p.id';
        $stm=$this->db->prepare($req);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
     }
    public function getCoacheById($id) {
        $req = "SELECT * FROM coaches WHERE id ='" . $id . "'";
        $stm=$this->db->prepare($req);
        $stm->execute();
        return $stm->fetch(PDO::FETCH_ASSOC);
     }
    public function getPlaceById($id) {
        $req = "SELECT * FROM places WHERE id ='" . $id . "'";
        $stm=$this->db->prepare($req);
        $stm->execute();
        return $stm->fetch(PDO::FETCH_ASSOC);
     }
    public function getUserById($id) {
        $req = "SELECT * FROM users WHERE id ='" . $id . "'";
        $stm=$this->db->prepare($req);
        $stm->execute();
        return $stm->fetch(PDO::FETCH_ASSOC);
     }
     public function getById($id) {
     $req =  'SELECT b.id,  u.firstname AS user_f, u.lastname AS user_l,'.
        ' c.firstname AS coache_f, c.lastname AS coache_l,'.
        ' p.address,p.start_time,p.end_time'.  
        ' FROM bookings b INNER JOIN users u ON b."userId"=u.id'.
        ' INNER JOIN coaches c ON b."coachId"=c.id '.
        ' INNER JOIN places p ON b."placeId"=p.id WHERE b.id ='.$id  ;
        $stm=$this->db->prepare($req);
        $stm->execute();
        return $stm->fetch(PDO::FETCH_ASSOC);;
       
    }
    public function delete($id) {
        $sql = 'DELETE FROM bookings WHERE id = '.$id;
       $stm= $this->db->prepare($sql);
        $res =$stm->execute(); 

        return $res;
    }

}
