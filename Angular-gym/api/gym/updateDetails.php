<?php
require_once 'init.inc.php';
$customer_id=$_POST['customer_id'];

$email=$_POST['email'];

$phone=$_POST['phone'];

$gym->updateGym($customer_id, $email, $phone);
// echo true;
?>


