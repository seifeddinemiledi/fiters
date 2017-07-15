<?php

class User {

    private $db;
 
    public function __construct() {
        $this->db=Db::getInstance();
    }
    
    

     function getAll(){
        $req = "SELECT * FROM users";
        $stm=$this->db->prepare($req);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
     }
    public function getById($id) {
        $req = "SELECT * FROM users WHERE id ='" . $id . "'";
        $stm=$this->db->prepare($req);
        $stm->execute();
        return $stm->fetch(PDO::FETCH_ASSOC);
    }

    public function getNbrConnection($id) {
        $req = 'SELECT * FROM auth_tokens WHERE "userId" = :id ';
        $stm=$this->db->prepare($req);
        $stm->bindParam(':id', $id);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getNbrBooking($id) {
        $req = 'SELECT * FROM bookings WHERE "userId" = :id ' ;
        $stm=$this->db->prepare($req);
        $stm->bindParam(':id', $id);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function delete($id) {
        $sql = 'DELETE FROM users WHERE id = '.$id;
       $stm= $this->db->prepare($sql);
        $res =$stm->execute(); 

        return $res;
    }

    public function insert($f,$l,$e,$d,$g,$p,$pass) {
        $sql = 'INSERT INTO users ( firstname ,lastname,email,"birthDate",gender,"phoneNumber",password) VALUES ('
        .':f,:l,:e,:d,:g,:p,:pass)';
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':f', $f);
    $stmt->bindParam(':l', $l);
    $stmt->bindParam(':e', $e);
    $stmt->bindParam(':d', $d);
    $stmt->bindParam(':g', $g);
    $stmt->bindParam(':p', $p);
    $stmt->bindParam(':pass', $pass);
        return $stmt->execute();
    }

    public function update($f,$l,$e,$d,$p,$id) {
          
        $req = 'UPDATE users SET firstname=:f , lastname=:l,email=:e,"birthDate"=:d,"phoneNumber"=:p where id=:id';
         $stmt = $this->db->prepare($req);
        $stmt->bindParam(':f', $f);
    $stmt->bindParam(':l', $l);
    $stmt->bindParam(':e', $e);
    $stmt->bindParam(':d', $d);
    $stmt->bindParam(':p', $p);
    $stmt->bindParam(':id', $id);
          return $stmt->execute();
    }



}
