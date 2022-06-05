<div class="container">
  <div class="row">
    <?php include('messageDiv.php'); ?>
  </div>
  <div class="row">
    <div class="col-md-6 col-md-2-offset">
    <div class="row">
      <form action="" method="post">
          <div class="mb-3">
            <label for="mode" class="form-label">Mode</label>
            <input type="text" class="form-control" name="mode" value="<?php echo $mode; ?>">
          </div>
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
</div>