<?php require 'inc/secure.inc.php';
require 'inc/init.inc.php';

if (isset($_REQUEST['Submit'])) {
 $ref_c_id=$_POST['ref_c_id'];
 $classdate=$_POST['classdate'];
 $classtime=$_POST['classtime'];
 $customer=$_POST['customer'];
 $class=$_POST['class'];

 try {
$dateofclass->adddateofclass($ref_c_id, $classdate, $classtime, $customer, $class );
  $stat ="add";
  header("Location:dateofclass.php?stat=$stat");
 }

 catch (PDOException $e)
 {
  echo '<br>PDO Exception Caught.';
  echo 'Error with the database: <br>';
  echo 'Error: ' . $e->getMessage().'</p>';
 }

}

else{
//$result =$customer->allcustomers();
 $result = $class->allclass();
  $result2 =$customer->allcustomers();





?>
  <form action=""  class="form-horizontal" method="POST">
  <fieldset>
    <legend>Please Complete the Details</legend>
     <div class ="form-group">
      <label for="ref_c_id" class="col-sm-2 control-label">Ref_c_id</label>
       <div class="col-sm-10">
        <input type="text" name="ref_c_id" id="ref_c_id"  maxlength="9" class="form-control" >
        <!-- required autofocus pattern="\d{9,9}" title="Please include a 9 digit ISBN" -->
       </div>       
     </div>

     <div class ="form-group">
       <label for="classdate" class="col-sm-2 control-label">Classdate</label>
       <div class="col-sm-10">
        <input type="text" name="classdate" id="classdate"  maxlength="30" class="form-control" >
        <!-- required title="Please enter the Book Title" -->
       </div>
     </div>


     <div class ="form-group">
       <label for="classtime" class="col-sm-2 control-label">classtime</label>
       <div class="col-sm-10">
        <input type="text" name="classtime" id="classtime"   maxlength="20" class="form-control" >
        <!-- required title="Please enter the Book Author" -->
       </div>
     </div>



     <div class ="form-group">
       <label for="customer" class="col-sm-2 control-label">Customer Name</label>
       <div class="col-sm-10">
        <select name="customer" id = "customer" class="form-control">
         <?php
           foreach ($result2 as $row){
           $cusid = $row->customer_id;
           $cusname=$row->name;
            echo "<option value='$cusid'>$cusname</option>";
           }
         ?>
      </select>
       </div>
     </div>

      <div class ="form-group">
       <label for="class" class="col-sm-2 control-label">Class Name</label>
       </td>
       <div class="col-sm-10">
        <select name="class" id = "class" class="form-control">
         <?php
           foreach ($result as $row){
           $claid = $row->class_id;
           $claname=$row->classname;
            echo "<option value='$claid'>$claname</option>";
           }
         ?>
      </select>
       </div>
     </div>



<div class = "form-group">
 <div class="col-sm-10 col-sm-offset-2">
  <input type="submit" class="btn btn-primary" value="Insert Dateofclass Record" name = "Submit">
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