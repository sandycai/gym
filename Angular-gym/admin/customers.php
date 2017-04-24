<?php require 'inc/secure.inc.php';
require 'inc/init.inc.php';

$result =$customer->allcustomers();
$count=count($result);
if ($count>0)
 {
  displaycustrecs($result);
  }
  else echo ("<br>There are no customers to view!");

require 'inc/footer.inc.php';
?>
</body>
</html>
