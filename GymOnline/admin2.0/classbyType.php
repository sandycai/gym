
<?php
require 'inc/init.inc.php';

if (isset($_REQUEST['Submit'])) {

try {
  $pubName= $_POST['type'];
  $fld='type';
  $result = $class->findclass($fld,$pubName);

  $count=count($result);
  if ($count>0)
  {
    displayclassrs($result);
  }
  else echo ("
<br>
There are no classes to view!");
}

catch(PDOException $e) {
 echo '
<br>
Problem with the Selecting from the class table - ';
 echo $e->getMessage();
 exit;
}
}
else {
?>
<form action="" method="post" id = "form" class="form-horizontal">
  <div class="form-group">
    <label for="type" class="col-sm-3 control-label">Type (full or partial):</label>
    <div class="col-sm-9">
      <input type="text" id = "type" name="type"  autofocus required
         pattern="[A-Za-z ]+" autofocus title="Please enter a type (full or partial)" class="form-control"></div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <input type="submit" name = "Submit" class="btn btn-primary"></div>
  </div>
</form>
<?php
}
require 'inc/footer.inc.php';
?></body>
</html>
