<?php require 'inc/secure.inc.php';
require 'inc/init.inc.php';
if (isset($_GET['stat'])) {
if($_GET['stat'] =='add') {
  echo "<h3>A dateofclass has been added successfully!</h3>";
}
else if($_GET['stat'] =='edit') {
  echo "<h3>The dateofclass record has been updated successfully!</h3>";
}
else if($_GET['stat'] =='delete') {
  echo "<h3>The dateofclass record has been deleted successfully!</h3>";
}
}
echo "<table width='100%'><tr><td width='33%'>";
echo "<h2 class='text-left'><a class='btn btn-primary' href='insertdateofclass.php' role='button'>
      <span class='glyphicon glyphicon-plus'></span>
      <b> Add</b></a></h2></td>";
echo "<td width='33%'><h2 class='text-center'><a class='btn btn-primary' href='datebycustomername.php' role='button'>
      <span class='glyphicon glyphicon-search'></span>
      <b> Search (customername)</b></a></h2></td>";
echo "<td><h2 class='text-right'><a class='btn btn-primary' href='datebyclasstime.php' role='button'><span class='glyphicon glyphicon-search'></span><b> Search (classtime)</b></a></h2></td></tr></table>";

$result =$dateofclass->alldateofclass();
$count=count($result);
if ($count>0)
 {
  displaydaterecs($result);
  }
  else echo ("<br>There are no dateofclass to view!");

require 'inc/footer.inc.php';
?>
</body>
</html>



























