<?php

use officeApp\Model\Employee;

$employee_id = $employee->get_id();
$employee_first_name = $employee->get_fname();
$employee_last_name  = $employee->get_lname();
$employee_mobile = $employee->get_mobile();
$employee_address = $employee->get_address();
$employee_email = $employee->get_email();
// $mode = $employee->get_mode();

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // set the item id to show old value in the form
  if (empty($_POST["employee_id"])) {
    $errors[] = "Item Id Field is Required";
  } else {
    $employee_id = $employee->dbHandler->sanitize($_POST["employee_id"]);
    $employee->set_id($employee_id);
  }

  // set the item id to show old value in the form
  if (empty($_POST["employee_first_name"])) {
    $errors[] = "First Name Field is Required";
  } else {
    $employee_first_name = $employee->dbHandler->sanitize($_POST["employee_first_name"]);
    $employee->set_fname($employee_first_name);
  }

  // set the item id to show old value in the form
  if (empty($_POST["employee_last_name"])) {
    $errors[] = "Last Name Field is Required";
  } else {
    $employee_last_name = $employee->dbHandler->sanitize($_POST["employee_last_name"]);
    $employee->set_lname($employee_last_name);
  }

  // set the item id to show old value in the form
  if (empty($_POST["employee_mobile"])) {
    $errors[] = "Mobile Field is Required";
  } else {
    $employee_mobile = $employee->dbHandler->sanitize($_POST["employee_mobile"]);
    $employee->set_mobile($employee_mobile);
  }

  // set the item id to show old value in the form
  if (empty($_POST["employee_address"])) {
    $errors[] = "Address Field is Required";
  } else {
    $employee_address = $employee->dbHandler->sanitize($_POST["employee_address"]);
    $employee->set_address($employee_address);
  }

  // set the item id to show old value in the form
  if (empty($_POST["employee_email"])) {
    $errors[] = "Email Field is Required";
  } else {
    $employee_email = $employee->dbHandler->sanitize($_POST["employee_email"]);
    $employee->set_id($employee_email);
  }


  // submit the form
  if (empty($errors)) {
    echo "form submitted";
    $employee_id = $_POST["employee_id"];
    $employee_first_name = $_POST["employee_first_name"];
    $employee_last_name = $_POST["employee_last_name"];
    $employee_mobile = $_POST["employee_mobile"];
    $employee_address = $_POST["employee_address"];
    $employee_email = $_POST["employee_email"];

    $employee = new Employee(null, $employee_first_name, $employee_last_name, $employee_mobile, $employee_address, $employee_email);
    $employee->save();
  }
}

if (!empty($errors)) {
  echo "<ul>";
  foreach ($errors as $error) {
    echo "<li>" . $error . "</li>";
  }
  echo "</ul>";
}

if (!empty($employee->results)) {
  echo "<ul>";
  foreach ($errors as $error) {
    echo "<li>" . $error . "</li>";
  }
  echo "</ul>";
}



?>
<div class="container">
  <div class="row">
  </div>
  <div class="row">
    <div class="col-md-6 col-md-2-offset">
      <form action="" method="post">
        <div class="mb-3">
          <label for="employee_id" class="form-label">Id</label>
          <input type="text" class="form-control" name="employee_id" value="<?php echo $employee_id; ?>">
        </div>

        <div class="mb-3">
          <label class="form-label">First Name</label>
          <input type="text" class="form-control" name="employee_first_name" placeholder="First Name" value="<?php echo $employee_first_name; ?>">
        </div>

        <div class="mb-3">
          <label class="form-label">Last Name</label>
          <input type="text" class="form-control" name="employee_last_name" placeholder="Last Name" value="<?php echo $employee_last_name; ?>">
        </div>

        <div class="mb-3">
          <label class="form-label">Address</label>
          <input type="text" class="form-control" name="employee_address" placeholder="Address" value="<?php echo $employee_address; ?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Email address</label>
          <input type="email" class="form-control" name="employee_email" placeholder="Email" value="<?php echo $employee_email; ?>">

        </div>

        <div class="mb-3">
          <label class="form-label">Phone Number</label>
          <input type="tel" class="form-control" name="employee_mobile" placeholder="Mobile" value="<?php echo $employee_mobile; ?>">
        </div>
        <!-- <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div> -->
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="Admin" value="User">
          <label class="form-check-label" for="Admin">Admin</label>
          <input type="checkbox" class="form-check-input" id="User" value="User">
          <label class="form-check-label" for="User">User</label>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
  </div>
</div>
</div>