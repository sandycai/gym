<?php
require 'inc/init.inc.php';
if (isset($_REQUEST['Submit'])) {
try
{   $publisherid=$_POST['pubid'];
    $email=$_POST['email'];
    $website=$_POST['web'];
    $publisher->updaterecord($publisherid, $email, $website);
    $stat ="edit";
    header("Location:publishers.php?stat=$stat");
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
$pubid = $_GET['publisher'];
try
{
   $publisherrec = $publisher->onepublisher($pubid);
   retrieveonerec($publisherrec);
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
    <fieldset><legend>Update a Publisher Record</legend>

	    <input type="hidden" name="pubid" id="pubid" value = "<?php echo $pubid;?>" >


     <div class ="form-group">
       <label for="pubname" class="col-sm-2 control-label">Publisher Name</label>
       <div class="col-sm-10">
        <input type="text" name="pubname" id="pubname"   class="form-control" disabled value = "<?php echo $publishername;?>">
       </div>
     </div>
     <div class ="form-group">
       <label for="city" class="col-sm-2 control-label">City</label>
       <div class="col-sm-10">
        <input type="text" name="city" id="city"   class="form-control" disabled  value = "<?php echo $city;?>">
       </div>
     </div>
     <div class ="form-group">
       <label for="email" class="col-sm-2 control-label">Email Contact</label>
       <div class="col-sm-10">
        <input type="email" name="email" id="email"  class="form-control" value = "<?php echo $email;?>" required pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$" title="Please enter a valid Email Contact Address">
       </div>
     </div>

     <div class ="form-group">
       <label for="web" class="col-sm-2 control-label">Website URL</label></td>
       <div class="col-sm-10">
         <input type="url" name="web" id="web"  class="form-control" value = "<?php echo $web;?>" required pattern="https?://[a-zA-Z]{3}\.[a-zA-Z0-9]{2,}\.[a-zA-Z0-9]{2,}" title="Please enter a valid URL">
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
