<?php

class Coache {

    private $db;
 
    public function __construct() {
        $this->db=Db::getInstance();
    }
    
    

     function getAll(){
        $req = "SELECT * FROM coaches";
        $stm=$this->db->prepare($req);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
     }
    public function getById($id) {
        $req = "SELECT * FROM coaches WHERE id ='" . $id . "'";
        $stm=$this->db->prepare($req);
        $stm->execute();
        return $stm->fetch(PDO::FETCH_ASSOC);
    }

    public function getNbrConnection($id) {
        $req = 'SELECT * FROM auth_tokens WHERE "coachId" = :id ';
        $stm=$this->db->prepare($req);
        $stm->bindParam(':id', $id);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getNbrBooking($id) {
        $req = 'SELECT * FROM bookings WHERE "coachId" = :id ' ;
        $stm=$this->db->prepare($req);
        $stm->bindParam(':id', $id);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function delete($id) {
        $sql = 'DELETE FROM coaches WHERE id = '.$id;
       $stm= $this->db->prepare($sql);
        $res =$stm->execute(); 

        return $res;
    }

    public function insert($f,$l,$e,$g,$p,$pass) {
        $sql = 'INSERT INTO coaches ( firstname ,lastname,email,gender,"phoneNumber",password) VALUES ('
        .':f,:l,:e,:g,:p,:pass)';
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':f', $f);
    $stmt->bindParam(':l', $l);
    $stmt->bindParam(':e', $e);
 
    $stmt->bindParam(':g', $g);
    $stmt->bindParam(':p', $p);
    $stmt->bindParam(':pass', $pass);
        return $stmt->execute();
    }

    public function update($f,$l,$e,$p,$id) {
          
        $req = 'UPDATE coaches SET firstname=:f , lastname=:l,email=:e,"phoneNumber"=:p where id=:id';
         $stmt = $this->db->prepare($req);
        $stmt->bindParam(':f', $f);
    $stmt->bindParam(':l', $l);
    $stmt->bindParam(':e', $e);
    
    $stmt->bindParam(':p', $p);
    $stmt->bindParam(':id', $id);
          return $stmt->execute();
    }



}
