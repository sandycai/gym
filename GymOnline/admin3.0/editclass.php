<?php require 'inc/secure.inc.php';
require 'inc/init.inc.php';
if (isset($_REQUEST['Submit'])) {
try
{   
    $classid=$_POST['classid'];
    $size=$_POST['size'];
    $description=$_POST['description'];
    $class->updaterecord($classid, $size, $description);
    $stat ="edit";
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
 else {
$classid = $_GET['class'];
try
{
   $classrec = $class->oneclass($classid);
   retrieveonerec($classrec);
}
catch (PDOException $e)
{
   echo '<br>PDO Exception Caught.';
   echo 'Error with the database: <br>';
   echo 'SQL Query: ', $sql;
   echo 'Error: ' . $e->getMessage().'</p>';
}

?>
</p>
<form action = "" method = "post" class="form-horizontal" id="insertpublisher" name ="insertpublisher">
    <fieldset><legend>Update a Class Record</legend>

	    <input type="hidden" name="classid" id="classid" value = "<?php echo $classid;?>" >



     <div class ="form-group">
       <label for="classname" class="col-sm-2 control-label">Class Name</label>
       <div class="col-sm-10">
        <input type="text" name="classname" id="classname"   class="form-control" disabled value = "<?php echo $classname;?>">
       </div>
     </div>
     <div class ="form-group">
       <label for="type" class="col-sm-2 control-label">Type</label>
       <div class="col-sm-10">
        <input type="text" name="type" id="type"   class="form-control" disabled  value = "<?php echo $type;?>">
       </div>
     </div>
     <div class ="form-group">
       <label for="size" class="col-sm-2 control-label">Size</label>
       <div class="col-sm-10">
        <input type="text" name="size" id="size"  class="form-control" value = "<?php echo $size;?>" required autofocus title="Please enter a valid Size">
       </div>
     </div>

     <div class ="form-group">
       <label for="description" class="col-sm-2 control-label">Description</label></td>
       <div class="col-sm-10">
         <input type="text" name="description" id="description"  class="form-control" value = "<?php echo $description;?>" required autofocus title="Please enter a valid description">
       </div>
     </div>
<div class = "form-group">
 <div class="col-sm-10 col-sm-offset-2">
       <input type="submit" class="btn btn-primary" value="Update Publisher Record" name = "Submit">
       <input type="reset" class="btn btn-primary" value="Clear the Info" >
	 </div>
	 </div>
    </fieldset>
    </form>

<?php
}
require 'inc/footer.inc.php';?>
</section>
</div>
</body>
</html>
