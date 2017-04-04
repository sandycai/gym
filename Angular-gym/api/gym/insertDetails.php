<?php
// Including database connections
require_once 'init.inc.php';
$customer_id=$_POST['customer_id'];
$name=$_POST['name'];
$email=$_POST['email'];
$type=$_POST['type'];
$phone=$_POST['phone'];
$date_entered=$_POST['date_entered'];
$gym->addGym($customer_id,$name, $email, $type, $phone,$date_entered);
// echo true;
?>