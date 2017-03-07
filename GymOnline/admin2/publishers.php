<?php
require 'inc/init.inc.php';
if (isset($_GET['stat'])) {
   if($_GET['stat'] =='add') {
     echo "<h3>DateOfClass has been added successfully!</h3>";
   }
   else if($_GET['stat'] =='edit') {
     echo "<h3>DateOfClass has been updated successfully!</h3>";
   }
   else if($_GET['stat'] =='delete') {
     echo "<h3>DateOfClass has been deleted successfully!</h3>";
   }
}
echo "<table width='100%'><tr><td width='33%'>";
echo "<h2 class='text-left'><a class='btn btn-primary' href='insertpublisher.php' role='button'><span class='glyphicon glyphicon-plus'></span><b> Add</b></a></h2>
</td>";
echo "<td width='33%'>
 <h2 class='text-center'><a class='btn btn-primary' href='publisherbyName.php' role='button'><span class='glyphicon glyphicon-search'></span><b> Search (Name)</b></a></h2>
</td>";
echo "<td width='33%'>
<h2 class='text-right'><a class='btn btn-primary' href='publisherbyCity.php' role='button'><span class='glyphicon glyphicon-search'></span><b> Search (City)</b></a></h2>
</td></tr></table>";

$result =$publisher->allpublishers();
$count=count($result);
if ($count>0)
 {
  displaypubrecs($result);
  }
  else echo ("<br>There are no publishers to view!");

require 'inc/footer.inc.php';
?>
</body>
</html>
