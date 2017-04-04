<?php
class Gym{

	private $dbh;

	public function __construct($database) {
	    $this->dbh = $database;
	}

	public function readAll(){
	  $sql = "SELECT * from customer ORDER BY customer_id ASC";
	  $stmt = $this->dbh->prepare($sql);
	  $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_OBJ);
   }
   public function addGym($customer_id,$name, $email, $type, $phone,$date_entered) {
     $sql = "INSERT into customer (customer_id,name,type,email,phone,date_entered) VALUES (:customer_id,:name,:type,:email,:phone,:date_entered)";
     $stmt= $this->dbh->prepare($sql);
     $stmt->bindParam(':customer_id', $customer_id);
     $stmt->bindParam(':name', $name);
     $stmt->bindParam(':type', $type);
     $stmt->bindParam(':email', $email);
     $stmt->bindParam(':phone', $phone);
     $stmt->bindParam(':date_entered',$date_entered);
     $stmt->execute();
   }

   public function updateGym($customer_id, $email, $phone) {
   	 $sql = "UPDATE customer SET email=:email,phone=:phone WHERE customer_id=:customer_id";
     $stmt= $this->dbh->prepare($sql);
     $stmt->bindParam(':customer_id', $customer_id);
     $stmt->bindParam(':email', $email);
     $stmt->bindParam(':phone', $phone);
     $stmt->execute();
   }

   public function deleteGym($emp) {
     $sql= "DELETE FROM customer WHERE customer_id=:customer_id";
     $stmt= $this->dbh->prepare($sql);
     $stmt->bindParam(':customer_id', $emp);
     $stmt->execute();
  }
}
?>