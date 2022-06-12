<?php

namespace officeApp;

use officeApp\Model\Employee;

include('Model/Employee.php');

// page hit
$employee = new Employee();
$employee->set_mode("new");
$employee->set_employee_id($employee->uniqidReal());

echo $employee->get_email();
echo "<br/>";
echo $employee->get_fname();
echo "<br/>";
echo $employee->get_mode();
echo "<br/>";
echo $employee->get_employee_id();
echo "<br/>";

// after successful submission
// create object with post values
$employee = new Employee(1,1,"f","l","m","a","e");
$results = $employee->save();

// save result to the session
$_SESSION['response'] = $results;

// if success
if($result['success'] == "success"){
    // Reset the form
    $employee = new Employee();
    $employee->set_mode("new");
}




echo "<pre>";
var_dump($results);
echo "</pre>";

?>
<div class="col-md-12">
<?php foreach ($roles['data'] as $role) { ?>              
    <div class="form-check form-check-inline pt-2">
        <input class="form-check-input" type="checkbox" value="<?php echo ucfirst($role['role_name']); ?>">
        <label class="form-check-label"><?php echo ucfirst($role['role_name']); ?></label>
    </div>                                   
<?php } ?>
</div>