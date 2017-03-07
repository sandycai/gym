<?php
function displaycustrecs($result)
{
    echo '<div class="table-responsive">';
    echo '<table class="table table-striped table-hover table-bordered table-condensed">
    <thead><tr>
    <th>Customer_id</th>
    <th>Name</th>
    <th>Type</th>
    <th>Email</th>
    <th>Phone</th>
    </tr></thead><tbody>';
        foreach ($result as $row) {
        echo "<tr>";
        echo "<td>" . $row->customer_id . "</td>";
        $cust = $row->customer_id;
        echo "<td>" . $row->name . "</td>";
        echo "<td>" . $row->type . "</td>";
        echo "<td>" . $row->email . "</td>";
        echo "<td>" . $row->phone . "</td>";
        echo "<td><div class='btn-group'>
     		<a href='viewcustomer.php?customerid=$cust' class='btn btn-default'><span class='glyphicon glyphicon-open' aria-hidden='true'></span></a></td>";
         echo"</tr>";
    }
    echo '</tbody></table>';
}




function retrieveonecustrec($customer)
{
    global $customer_id, $name, $type, $email, $phone;
    $customer_id = $customer->customer_id;
    $name = $customer->name;
    $type = $customer->type;
    $email = $customer->email;
    $phone = $customer->phone;
}

function retrieveonerec($dateofclass) {
    global $ref_c_id, $classdate, $classtime, $customer_id, $class_id;
    $ref_c_id = $dateofclass->ref_c_id;
    $classdate= $dateofclass->classdate;
    $classtime=$dateofclass->classtime;
    $customer_id=$dateofclass->customer_id;
    $class_id=$dateofclass->class_id;
}


function displaydatrecs($result) {
 echo '<div class="table-responsive">';
 echo '<table class="table table-striped table-hover table-bordered table-condensed"><thead><tr><th>Publisher</th><th>City</th>
 <th>Email Contact</th><th>Website</th></tr></thead><tbody>';
   foreach ($result as $row){
    echo "<tr>";
    echo "<td>".$row->ref_c_id."</td>";
    $dat=$row->ref_c_id;
    echo "<td>".$row->classdate."</td>";
    echo "<td>".$row->classtime."</td>";
    echo "<td>".$row->customer_id."</td>";
    echo "<td>".$row->class_id."</td>";
    echo "<td><div class='btn-group'>
          <a href='editpublisher.php?publisher=$dat' class='btn btn-default'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span></a>
          <a href='deletepublisher.php?publisher=$dat' class='btn btn-default'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a></td>";
    echo"</tr>";
   }
  echo '</tbody></table>';
}


?>
