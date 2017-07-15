<?php

class Place {

    private $db;
 
    public function __construct() {
        $this->db=Db::getInstance();
    }
    
    

     function getAll(){
        $req = "SELECT * FROM places";
        $stm=$this->db->prepare($req);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
     }
    public function getById($id) {
        $req = "SELECT * FROM places WHERE id ='" . $id . "'";
        $stm=$this->db->prepare($req);
        $stm->execute();
        return $stm->fetch(PDO::FETCH_ASSOC);
    }



    public function delete($id) {
        $sql = 'DELETE FROM places WHERE id = '.$id;
       $stm= $this->db->prepare($sql);
        $res =$stm->execute(); 

        return $res;
    }

    public function insert($n,$a,$s,$e) {
        $sql = 'INSERT INTO places (name,address,start_time,end_time,type,pos) VALUES ('
        .':n,:a,:s,:e,1,\'0101000020E61000005B9C8C857CAB02409A929B97796E4840\')';
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':n', $n);
        $stmt->bindParam(':a', $a);
        $stmt->bindParam(':s', $s);
        $stmt->bindParam(':e', $e);
        //$stmt->bindParam(':pos',"");
    
        return $stmt->execute();
    }

   

    public function update($n,$a,$s,$e,$id) {
          
        $req = 'UPDATE places SET name=:n , address=:a,start_time=:s,"end_time"=:e where id=:id';
         $stmt = $this->db->prepare($req);
        $stmt->bindParam(':n', $n);
    $stmt->bindParam('a', $a);
    $stmt->bindParam(':s', $s);
    
    $stmt->bindParam(':e', $e);
    $stmt->bindParam(':id', $id);
          return $stmt->execute();
    }
}
