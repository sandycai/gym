
<?php require 'inc/secure.inc.php';
require 'inc/init.inc.php';

if (isset($_REQUEST['Submit'])) {
try {
  $classname= $_POST['classname'];
  $fld='classname';
  $result = $class->findclass($fld,$classname);
  $count=count($result);
  if ($count>0)
  {
    displayclassrs($result);
  }
  else echo ("<br>There are no classes to view!");
}
catch(PDOException $e) {
 echo '<br>Problem with the Selecting from the class table - ';
 echo $e->getMessage();
 exit;
}
}
else {
?>
<form action="" method="post" id = "form" class = form-horizontal>
<div class="form-group">
 <label for="classname" class="col-sm-3 control-label">Class (full or partial): </label>
 <div class="col-sm-9">
 <input type="text" id = "classname" name="classname"  autofocus required
                     pattern="[A-Za-z ]+" autofocus title="Please enter a name (full or partial)" class="form-control">
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



























