<?php
require_once 'header.inc.php';
require_once 'db.inc.php';
require_once 'class.inc.php';
require_once 'gymstore.inc.php';
require_once 'customer.inc.php';
require_once 'dateofclass.inc.php';

$class 		= new classes($dbh);
$customer   = new Customer($dbh);
$dateofclass = new Dateofclass($dbh);
?>