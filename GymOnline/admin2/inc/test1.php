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
		  <a href='editpublisher.php?publisher=$cust' class='btn btn-default'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span></a>
		  <a href='deletepublisher.php?publisher=$cust' class='btn btn-default'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a></td>";
        echo "</tr>";
    }
    echo '</tbody></table>';
}


function retrieveonerec($customer)
{
    global $customer_id, $name, $type, $email, $phone, $date_entered;
    $customer_id = $customer->customer_id;
    $name = $customer->name;
    $type = $customer->type;
    $email = $customer->email;
    $phone = $customer->phone;
}

/*function retrieveonecustrec($customer)
{
    global $fname, $lname, $street, $town, $county, $phone, $email;
    $fname = $customer->firstname;
    $lname = $customer->lastname;
    $street = $customer->street;
    $town = $customer->town;
    $county = $customer->county;
    $phone = $customer->phone;
    $email = $customer->email;

}*/

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
        echo "</tr>";
    }
    echo '</tbody></table>';
}
?>
