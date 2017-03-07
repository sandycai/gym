
<?php
require 'inc/init.inc.php';

if (isset($_REQUEST['Submit'])) {

try {
  $pubName= $_POST['city'];
  $fld='city';
  $result = $publisher->findpublisher($fld,$pubName);

  $count=count($result);
  if ($count>0)
  {
    displaypubrecs($result);
  }
  else echo ("<br>There are no publishers to view!");
}

catch(PDOException $e) {
 echo '<br>Problem with the Selecting from the Publisher table - ';
 echo $e->getMessage();
 exit;
}
}
else {
?>
<form action="" method="post" id = "form" class="form-horizontal">
<div class="form-group">
 <label for="city" class="col-sm-3 control-label">City (full or partial): </label>
  <div class="col-sm-9">
  <input type="text" id = "city" name="city"  autofocus required
         pattern="[A-Za-z ]+" autofocus title="Please enter a city (full or partial)" class="form-control">
  </div>
</div>

<div class="form-group">
 <div class="col-sm-offset-3 col-sm-9">
 <input type="submit" name = "Submit" class="btn btn-primary">
 </div>
</div>
</form>
<?php
}
require 'inc/footer.inc.php';
?>
</body>
</html>



























