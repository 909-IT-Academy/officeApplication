<?php
$id = $employee->get_id();
$employee_id = $employee->get_employee_id();
$employee_first_name = $employee->get_fname();
$employee_last_name  = $employee->get_lname();
$employee_mobile = $employee->get_mobile();
$employee_address = $employee->get_address();
$employee_email = $employee->get_email();
$mode = $employee->get_mode();
$roles = $role->get_all();


?>
<div class="row">
    <form action="" method="post" class="row g-3 mt-2 p-4">
        <h4 class="pb-2"> NEW EMPLOYEE FORM </h4>        
        <div class="col-md-12">            
            <input type="text" class="form-control" name="id" value="<?php echo $id; ?>" placeholder="id">
            <input type="text" class="form-control" name="mode" value="<?php echo $mode; ?>" placeholder="mode">
        </div>
        <div class="col-md-12">
            <label class="form-label">Employee Id</label>
            <input type="text" class="form-control" name="employee_id" value="<?php echo $employee_id;?>" readonly>
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
        <div class="col-md-12">
        <strong> Choose your role </strong> </br>
        <?php
            foreach ($roles['data'] as $role) {
                $roleName = $role['role_name'];
                $roleId = $role['id'];
                echo "<div class=\"form-check form-check-inline pt-2\">";
                echo "<input class=\"form-check-input\" type=\"checkbox\" value= $roleId name=\"employee_role[]\">";
                echo "<label class=\"form-check-label\">".ucfirst($roleName)."</label>";
                echo "</div>";
            }
        ?>
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-block btn-primary mb-3 form-control">Submit</button>
        </div>
    </form>
</div>
