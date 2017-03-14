<?php
class classes{

	private $db;

	public function __construct($database) {
	    $this->db = $database;
	}

	public function allclass() {
		$sql = "select * from class order by class_id;";
	    $stmt = $this->db->prepare($sql);
	    $stmt->execute();
	    return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function findclass($field, $className) {
			$sql = "select * from class where $field like :className order by class_id;";
		    $stmt = $this->db->prepare($sql);
		    $className="%".$className."%";
		  	$stmt->bindParam(':className', $className, PDO::PARAM_STR);
		    $stmt->execute();
		    return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function oneclass($classid) {
	    $sql = 'select * from class where class_id = :classid';
	    $stmt =$this->db->prepare($sql);
        $stmt->bindParam(':classid', $classid, PDO::PARAM_INT);
	    $stmt->execute();
        $class=$stmt->fetch(PDO::FETCH_OBJ);
        return $class;
	}

	public function addclass($classid, $classname, $type, $size, $description) {
	        $sql = "INSERT INTO class (class_id, classname, type, size, description) values (:classid, :classname, :type, :size, :description)";
	        $stmt= $this->db->prepare($sql);
	        $stmt->bindParam(':classid', $classid, PDO::PARAM_STR);
	        $stmt->bindParam(':classname', $classname, PDO::PARAM_STR);
	        $stmt->bindParam(':type', $type, PDO::PARAM_STR);
	        $stmt->bindParam(':size', $size, PDO::PARAM_STR);
	        $stmt->bindParam(':description', $description, PDO::PARAM_STR);
	        $stmt->execute();
	}

	public function updaterecord($class_id,  $size, $description) {
	       $sql = 'UPDATE class SET size = :size,
	               description = :description
	               WHERE class_id = :class_id';
	       $stmt = $this->db->prepare($sql);
	       $stmt->bindParam(':class_id', $class_id,PDO::PARAM_INT);
	       $stmt->bindParam(':size', $size,PDO::PARAM_STR);
	       $stmt->bindParam(':description', $description ,PDO::PARAM_STR);
		   $stmt->execute();
	}

	public function deleterecord($class_id) {
	       $sql = 'DELETE from class WHERE class_id = :class_id';
	       $stmt = $this->db->prepare($sql);
	       $stmt->bindParam(':class_id', $class_id,PDO::PARAM_INT);
		   $stmt->execute();
	}

}
?>
