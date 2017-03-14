<?php
class Dateofclass
{

    private $db;

    public function __construct($database)
    {
        $this->db = $database;
    }

    public function alldateofclass()
    {
        $sql = "SELECT * FROM class JOIN dateofclass on class.class_id = dateofclass.class_id join customer ON dateofclass.customer_id = customer.customer_id ORDER BY ref_c_id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function onedateofclass($ref_c_id)
    {
        $sql = 'SELECT * FROM class JOIN dateofclass on class.class_id = dateofclass.class_id join customer ON dateofclass.customer_id = customer.customer_id  where ref_c_id = :ref_c_id';
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':ref_c_id', $ref_c_id, PDO::PARAM_STR);
        $stmt->execute();
        $dateofclass = $stmt->fetch(PDO::FETCH_OBJ);
        return $dateofclass;
    }

    public function finddateofclass($field, $customer_id)
    {
        $sql = "SELECT * FROM class JOIN dateofclass on class.class_id = dateofclass.class_id join customer ON dateofclass.customer_id = customer.customer_id  where $field like :customer_id order by customer.customer_id";
        $stmt = $this->db->prepare($sql);
        $customer_id = "%" . $customer_id . "%";
        $stmt->bindParam(':customer_id', $customer_id, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function adddateofclass($ref_c_id, $classdate, $classtime, $customer_id, 
                                   $class_id)
    {
        $sql = "INSERT INTO dateofclass (ref_c_id, classdate, classtime, customer_id, class_id) values (:ref_c_id, :classdate, :classtime, :customer_id,:class_id )";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':ref_c_id', $ref_c_id, PDO::PARAM_STR);
        $stmt->bindParam(':classdate', $classdate, PDO::PARAM_STR);
        $stmt->bindParam(':classtime', $classtime, PDO::PARAM_STR);
        $stmt->bindParam(':customer_id', $customer_id, PDO::PARAM_INT);
        $stmt->bindParam(':class_id', $class_id, PDO::PARAM_INT);//?STR / INT
        $stmt->execute();
    }

    public function updaterecord($ref_c_id, $classdate, $classtime)
    {
        $sql = 'UPDATE dateofclass SET
               ref_c_id = :ref_c_id,
               classdate = :classdate,
               classtime = :classtime
               WHERE ref_c_id = :ref_c_id';
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':ref_c_id', $ref_c_id, PDO::PARAM_STR);
        $stmt->bindParam(':classdate', $classdate, PDO::PARAM_STR);
        $stmt->bindParam(':classtime', $classtime, PDO::PARAM_STR);
        $stmt->execute();
    }

    public function deleterecord($ref_c_id)
    {
        $sql = 'DELETE from dateofclass WHERE ref_c_id = :ref_c_id';
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':ref_c_id', $ref_c_id, PDO::PARAM_STR);
        $stmt->execute();
    }
}
