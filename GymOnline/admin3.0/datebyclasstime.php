<?php require 'inc/secure.inc.php';
require 'inc/init.inc.php';

if (isset($_REQUEST['Submit'])) {
try {
  $classtime= $_POST['classtime'];
  $fld='classtime';
  $result = $dateofclass->finddateofclass($fld,$classtime);
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
 <label for="classtime" class="col-sm-3 control-label">

  Gym classtime (full or partial): 

 </label>
 <div class="col-sm-9">
 <input type="text" id = "classtime" name="classtime"  autofocus required
                     pattern="[A-Za-z ]+" autofocus title="Please enter a classtime (full or partial)" class="form-control">
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



























