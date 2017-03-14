<?php require 'inc/secure.inc.php';
require 'inc/init.inc.php';

if (isset($_REQUEST['Submit'])) {
try {
  $customername= $_POST['customername'];
  $fld='name';
  $result = $dateofclass->finddateofclass($fld,$customername);
  $count=count($result);
  if ($count>0)
  {
    displaydaterecs($result);
  }
  else echo ("<br>There are no dateofclass to view!");
}
catch(PDOException $e) {
 echo '<br>Problem with the Selecting from the dateofclass table - ';
 echo $e->getMessage();
 exit;
}
}
else {
?>
<form action="" method="post" id = "form" class = form-horizontal>
<div class="form-group">
 <label for="customername" class="col-sm-3 control-label">Dateofclass Title (full or partial): </label>
 <div class="col-sm-9">
 <input type="text" id = "customername" name="customername"  autofocus required
                     pattern="[A-Za-z0-9 ]+" autofocus title="Please enter a customername (full or partial)" class="form-control">
 </div>
 </div>

  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
 <input type="submit" name = "Submit" class="btn btn-primary">
 </div></div>
</form>
<?php
}
require 'inc/footer.inc.php';
?>
</body>
</html>



























