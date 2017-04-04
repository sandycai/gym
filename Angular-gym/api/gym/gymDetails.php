<?php
// Including database connections
require_once 'init.inc.php';
$result = $gym->readAll();

# JSON-encode the response
echo $json_info = json_encode($result);
?>