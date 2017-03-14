<?php require 'inc/secure.inc.php';
require 'inc/init.inc.php';
if (isset($_REQUEST['Submit'])) {
try
{   $ref_c_id=$_POST['ref_c_id'];
/*    $customer_id = $_POST['customer_id'];*/
    $classdate=$_POST['classdate'];
    $classtime=$_POST['classtime'];
    $dateofclass->updaterecord($ref_c_id, $classdate, $classtime);
    $stat ="edit";
    header("Location:dateofclass.php?stat=$stat");
}
catch (PDOException $e)
{
   echo '<br>PDO Exception Caught.';
   echo 'Error with the database: <br>';
   echo 'Error: ' . $e->getMessage().'</p>';
}
}
 else {
$ref_c_id = $_GET['ref_c_id'];

try
{
   $daterec = $dateofclass->onedateofclass($ref_c_id);
   retrieveonedate($daterec);
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
    <fieldset><legend>Update a dateofclass Record for ref_c_id: <?php echo $ref_c_id;?></legend>

	    <input type="hidden" name="ref_c_id" id="ref_c_id" value = "<?php echo $ref_c_id;?>" >


     <div class ="form-group">
       <label for="customer_id" class="col-sm-2 control-label">Customer_id</label>
       <div class="col-sm-10">
        <input type="text" name="customer_id" id="customer_id"   class="form-control" disabled value = "<?php echo $customer_id;?>">
       </div>
     </div>

     <div class ="form-group">
       <label for="classdate" class="col-sm-2 control-label">Classdate</label></td>
       <div class="col-sm-10">
         <input type="text" name="classdate" id="classdate"  class="form-control"   value = "<?php echo $classdate;?>" >
       </div>
     </div>

     <div class ="form-group">
       <label for="classtime" class="col-sm-2 control-label">classtime</label></td></td>
       <div class="col-sm-10">
         <input type="text" name="classtime" id="classtime"  maxlength="20"  class="form-control"  value = "<?php echo $classtime;?>">
       </div>
     </div>



<div class = "form-group">
 <div class="col-sm-10 col-sm-offset-2">
       <input type="submit" class="btn btn-primary" value="Update Dateofclass Record" name = "Submit">
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
