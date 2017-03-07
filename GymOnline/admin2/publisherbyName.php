
<?php
require 'inc/init.inc.php';

if (isset($_REQUEST['Submit'])) {
try {
  $pubName= $_POST['pubname'];
  $fld='publishername';
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
<form action="" method="post" id = "form" class = form-horizontal>
<div class="form-group">
 <label for="pubname" class="col-sm-3 control-label">Publisher (full or partial): </label>
 <div class="col-sm-9">
 <input type="text" id = "pubname" name="pubname"  autofocus required
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



























