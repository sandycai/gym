<?php
class Publisher{

	private $db;

	public function __construct($database) {
	    $this->db = $database;
	}

	public function alldateofclass() {
		$sql = "select * from dateofclass order by ref_c_id;";
	    $stmt = $this->db->prepare($sql);
	    $stmt->execute();
	    return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function finddateofclass($field, $ref_c_id) {
			$sql = "select * from dateofclass where $field like :ref_c_id order by ref_c_id;";
		    $stmt = $this->db->prepare($sql);
		    $ref_c_id="%".$ref_c_id."%";
		  	$stmt->bindParam(':ref_c_id', $ref_c_id, PDO::PARAM_STR);
		    $stmt->execute();
		    return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function onedateofclass($ref_c_id) {
	    $sql = 'select * from dateofclass where publisherid = :ref_c_id';
	    $stmt =$this->db->prepare($sql);
        $stmt->bindParam(':ref_c_id', $ref_c_id, PDO::PARAM_INT);
	    $stmt->execute();
        $dateofclass=$stmt->fetch(PDO::FETCH_OBJ);
        return $dateofclass;
	}

	public function adddateofclass($ref_c_id, $classdate, $classtime) {
	        $sql = "INSERT INTO dateofclass (ref_c_id, classdate, classtime, website) values (:ref_c_id, :classdate, :email)";
	        $stmt= $this->db->prepare($sql);
	        $stmt->bindParam(':ref_c_id', $ref_c_id, PDO::PARAM_STR);
	        $stmt->bindParam(':classdate', $classdate, PDO::PARAM_STR);
	        $stmt->bindParam(':classtime', $classtime, PDO::PARAM_STR);
	        $stmt->execute();
	}

	public function updaterecord($pubid,  $email, $web) {
	       $sql = 'UPDATE publisher SET emailcontact = :email,
	               website = :web
	               WHERE publisherid = :pubid';
	       $stmt = $this->db->prepare($sql);
	       $stmt->bindParam(':pubid', $pubid,PDO::PARAM_INT);
	       $stmt->bindParam(':email', $email,PDO::PARAM_STR);
	       $stmt->bindParam(':web', $web ,PDO::PARAM_STR);
		   $stmt->execute();
	}

	public function deleterecord($pubid) {
	       $sql = 'DELETE from publisher WHERE publisherid = :pubid';
	       $stmt = $this->db->prepare($sql);
	       $stmt->bindParam(':pubid', $pubid,PDO::PARAM_INT);
		   $stmt->execute();
	}

}
?>
