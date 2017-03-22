<?php require 'inc/secure.inc.php';
require 'inc/init.inc.php';
if (isset($_GET['stat'])) {
    if ($_GET['stat'] == 'add') {
        echo "<h3>Class has been added successfully!</h3>
";
    } else if ($_GET['stat'] == 'edit') {
        echo "
<h3>Class has been updated successfully!</h3>
";
    } else if ($_GET['stat'] == 'delete') {
        echo "
<h3>Class has been deleted successfully!</h3>
";
    }
}
echo "
<table width='100%'>
<tr>
  <td width='33%'>
    ";
echo "
    <h2 class='text-left'>
      <a class='btn btn-primary' href='insertclass.php' role='button'>
        <span class='glyphicon glyphicon-plus'></span> <b>Add</b>
      </a>
    </h2>
  </td>
  ";
echo "
  <td width='33%'>
    <h2 class='text-center'>
      <a class='btn btn-primary' href='classbyName.php' role='button'>
        <span class='glyphicon glyphicon-search'></span> <b>Search (Name)</b>
      </a>
    </h2>
  </td>
  ";
echo "
  <td width='33%'>
    <h2 class='text-right'>
      <a class='btn btn-primary' href='classbyType.php' role='button'>
        <span class='glyphicon glyphicon-search'></span>
        <b>Search (Type)</b>
      </a>
    </h2>
  </td>
</tr>
</table>
";

$result = $class->allclass();
$count = count($result);
if ($count > 0) {
    displayclassrs($result);
} else {
    echo ("
<br>
There are no class to view!");
}

require 'inc/footer.inc.php';
?>
</body>
</html>
