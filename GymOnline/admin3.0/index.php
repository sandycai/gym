<?php require 'inc/access.inc.php';
if (loggedIn())
{   header('Location:class.php');}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Site Admininstration Area</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/mycss.css" rel="stylesheet" >
</head>

<body>
<div class = "container">
<div class="row">
<header class="col-md-12">
<h1 >Online Gym Database Access</h1>
</header>
</div>
<div class="row">

<div class="col-md-3 startup">
<img src="images/book3.jpg" alt ="">
</div>
<div class="col-md-4 col-md-offset-1 startup" style="margin-top: 8%;">
<?php $action=false;?>
<a class="start"   data-toggle="modal" href="#login" style="border:2px solid; text-decoration: none;border-radius:10px;color: black;">Enter the Gymstore</a>
</div>
<div class="col-md-3 startup">
<img src="images/images.jpg" alt ="">
</div>


<div class="col-md-4 startup">
<img src="images/book4.jpg" alt ="">
</div>

<div class="col-md-4 startup">
<img src="images/images1.jpg" alt ="">
</div> 
<div class="col-md-4 startup">
<img src="images/images2.jpg" alt ="">
</div> 
</div>


<!-- Modal -->
<div class="modal fade" id="login"  role="dialog" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4>Online Gym Database Access</h4>
      </div>
      <form action="<?php echo  $_SERVER['PHP_SELF']; ?>" method="post" class = "form-horizontal">
      <div class="modal-body">
	  	<div class = "form-group">
	  		<label for = "uname" class = "col-lg-2 control-label">Username:</label>
	  		<div class = "col-lg-10">
	  			<input type = "text" class = "form-control" id = "uname" name = "uname" autofocus>
	         </div>
	      </div>
	  	<div class = "form-group">
	  		<label for = "password1" class = "col-lg-2 control-label">Password:</label>
	  		<div class = "col-lg-10">
	  			<input type = "password" class = "form-control" id = "password1" name = "password1">
	         </div>
	      </div>
	  	<div class = "modal-footer">
	  		<a class = "btn btn-default" data-dismiss = "modal" >Close</a>
	  		<button class = "btn btn-primary" type = "submit">Login</button>
	     </div>
	     </form>
	  </div>
	  </div>
</div>
</div>
<?php

require 'inc/footer.inc.php';
?>


</body></html>


