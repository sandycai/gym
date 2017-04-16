<?php require 'inc/secure.inc.php';
require 'inc/init.inc.php';
if (isset($_REQUEST['Submit'])) {
 $class_id=$_POST['class_id'];
 $classname=$_POST['classname'];
 $type=$_POST['type'];
 $size=$_POST['size'];
 $description=$_POST['description'];

try {
  $class->addclass($class_id, $classname, $type, $size, $description);
  $stat ="add";
  header("Location:class.php?stat=$stat");
  exit;
 }
 catch (PDOException $e)
 {
  echo '<br>PDO Exception Caught.';
  echo 'Error with the database: <br>';
  echo 'SQL Query: ', $sql;
  echo 'Error: ' . $e->getMessage().'</p>';
 }
}
else{

?>
	<form action=""  class="form-horizontal" method="POST" id="insertclass" name ="insertclass" >
	<fieldset>
    <legend>Please Complete the Details</legend>

     <div class ="form-group">
       <label for="class_id" class="col-sm-2 control-label">Classid</label>
       <div class="col-sm-10">
        <input type="text" name="class_id" id="class_id"   class="form-control" required autofocus   title="Please enter a valid classid">
       </div>
     </div>
     <div class ="form-group">
       <label for="classname" class="col-sm-2 control-label">Classname</label>
       <div class="col-sm-10">
        <input type="text" name="classname" id="classname"   class="form-control" required autofocus   title="Please enter a valid classname">
       </div>
     </div>
     <div class ="form-group">
       <label for="type" class="col-sm-2 control-label">Type</label>
       <div class="col-sm-10">
        <input type="text" name="type" id="type"   class="form-control" required autofocus title="Please enter the type">
       </div>
     </div>
     <div class ="form-group">
       <label for="size" class="col-sm-2 control-label">Size</label>
       <div class="col-sm-10">
        <input type="text" name="size" id="size"  class="form-control" required autofocus title="Please enter a valid size">
       </div>
     </div>

     <div class ="form-group">
       <label for="description" class="col-sm-2 control-label">Description</label></td>
       <div class="col-sm-10">
         <input type="text" name="description" id="description"  class="form-control" required autofocus title="Please enter a valid description">
       </div>
     </div>
<div class = "form-group">
 <div class="col-sm-10 col-sm-offset-2">
       <input type="submit" class="btn btn-primary" value="Insert Publisher Record" name = "Submit">
       <input type="reset" class="btn btn-primary" value="Clear the Info" >
	 </div>
	 </div>
    </fieldset>
    </form>
<?php
}
require 'inc/footer.inc.php';
?>
</section>
</div>
</div>

</body>
</html>