<?php
require 'inc/init.inc.php';

$custid = $_GET['customerid'];//表单名称 customerid ->gym2store
try
{
   $custrec = $customer->onecustomer($custid);
   retrieveonecustrec($custrec);
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
    <fieldset><legend>View a Customer Record</legend>



     <div class ="form-group">
       <label for="pubname" class="col-sm-2 control-label">Customer_id</label>
       <div class="col-sm-10">
        <input type="text" name="pubname" id="pubname"   class="form-control" disabled value = "<?php echo $customer_id;?>">
       </div>
     </div>

        <div class ="form-group">
       <label for="pubname" class="col-sm-2 control-label">Name</label>
       <div class="col-sm-10">
        <input type="text" name="pubname" id="pubname"   class="form-control" disabled value = "<?php echo $name;?>">
       </div>
     </div>

     <div class ="form-group">
       <label for="pubname" class="col-sm-2 control-label">Type</label>
       <div class="col-sm-10">
        <input type="text" name="pubname" id="pubname"   class="form-control" disabled value = "<?php echo $type;?>">
       </div>
     </div>

     <div class ="form-group">
       <label for="pubname" class="col-sm-2 control-label">Email</label>
       <div class="col-sm-10">
        <input type="text" name="pubname" id="pubname"   class="form-control" disabled value = "<?php echo $email;?>">
       </div>
     </div>


     <div class ="form-group">
       <label for="pubname" class="col-sm-2 control-label">Phone</label>
       <div class="col-sm-10">
        <input type="text" name="pubname" id="pubname"   class="form-control" disabled value = "<?php echo $phone;?>">
       </div>
     </div>

    </fieldset>
    </form>

<?php
require 'inc/footer.inc.php';
?>
</body>
</html>
