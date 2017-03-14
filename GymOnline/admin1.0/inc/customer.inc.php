<?php
class Customer{

	private $db;

	public function __construct($database) {
	    $this->db = $database;
	}
	public function allcustomers() {
		$sql = "select customer_id, name, type, email, phone from customer order by customer_id;";
	    $stmt = $this->db->prepare($sql);
	    $stmt->execute();
	    return $stmt->fetchAll(PDO::FETCH_OBJ);
	}


public function onecustomer($cust) {
	    $sql = 'select * from customer where customer_id = :custid';
	    $stmt =$this->db->prepare($sql);
        $stmt->bindParam(':custid', $cust, PDO::PARAM_INT);
	    $stmt->execute();
        $customer=$stmt->fetch(PDO::FETCH_OBJ);
        return $customer;
	}

}
?>
