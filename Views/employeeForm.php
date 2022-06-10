<?php
$employee_id = $employee->get_id();
$employee_first_name = $employee->get_fname();
$employee_last_name  = $employee->get_lname();
$employee_mobile = $employee->get_mobile();
$employee_address = $employee->get_address();
$employee_email = $employee->get_email();
// $mode = $employee->get_mode();
?>
<div class="row">
  <?php include('views/messageDiv.php'); ?>
</div>
<form action="" method="post" class="row g-3 mt-2 p-4">
  <strong class="pb-2"> NEW EMPLOYEE FORM </strong>
  <div>
    <div class="col-md-3">
      <label for="employee_id" class="form-label">Id</label>
      <input type="text" class="form-control" name="employee_id" value="<?php echo $employee_id; ?>">
    </div>
  </div>
  <div class="col-md-6">
    <label class="form-label">First Name</label>
    <input type="text" class="form-control" name="employee_first_name" placeholder="First Name" value="<?php echo $employee_first_name; ?>">
  </div>
  <div class="col-md-6">
    <label class="form-label">Last Name</label>
    <input type="text" class="form-control" name="employee_last_name" placeholder="Last Name" value="<?php echo $employee_last_name; ?>">
  </div>
  <div class="col-md-12">
    <label class="form-label">Address</label>
    <input type="text" class="form-control" name="employee_address" placeholder="Address" value="<?php echo $employee_address; ?>">
  </div>
  <div class="col-md-6">
    <label class="form-label">Email address</label>
    <input type="email" class="form-control" name="employee_email" placeholder="Email" value="<?php echo $employee_email; ?>">
  </div>
  <div class="col-md-6">
    <label class="form-label">Phone Number</label>
    <input type="tel" class="form-control" name="employee_mobile" placeholder="Mobile" value="<?php echo $employee_mobile; ?>">
  </div>
  <div>
    <strong> Choose your role </strong> </br>
    <div class="form-check form-check-inline pt-2">
      <input class="form-check-input" type="checkbox" id="admin" value="Admin">
      <label class="form-check-label" for="admin">Admin</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="user" value="User">
      <label class="form-check-label" for="user">User</label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary mb-3">Submit</button>
  </div>


</form>