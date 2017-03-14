<?php
function displayclassrs($result)
{
    echo '<div class="table-responsive">';
    echo '<table class="table table-striped table-hover table-bordered table-condensed">
  <thead>
    <tr>
      <th>Classid</th>
      <th>Classname</th>
      <th>Type</th>
      <th>Size</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>';
    foreach ($result as $row) {
        echo "
    <tr>
      ";

        echo "
      <td>" . $row->class_id . "</td>";
        $class = $row->class_id;
        echo "
      <td>" . $row->classname . "</td>";
        echo "
      <td>" . $row->type . "</td>";
        echo "
      <td>" . $row->size . "</td>";
        echo "
      <td>" . $row->description . "</td>";
        echo "
      <td>
        <div class='btn-group'>
          <a href='editclass.php?class=$class' class='btn btn-default'>
            <span class='glyphicon glyphicon-edit' aria-hidden='true'></span>
          </a>
          <a href='deleteclass.php?class=$class' class='btn btn-default'>
            <span class='glyphicon glyphicon-trash' aria-hidden='true'></span>
          </a>
        </td>
        ";
        echo "</tr>";
    }
    echo '</tbody></table>';
}

function retrieveonerec($class)
{
    global $classid, $classname, $type, $size, $description;
    $classid = $class->class_id;
    $classname = $class->classname;
    $type = $class->type;
    $size = $class->size;
    $description = $class->description;
}

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
        echo "</tr>";
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


