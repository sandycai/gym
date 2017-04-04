<?php
require_once 'init.inc.php';
$customer_id=$_POST['customer_id'];
$gym->deleteGym($customer_id);
// echo true;
?>

