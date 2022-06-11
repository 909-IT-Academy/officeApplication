<?php
namespace officeApp;
session_start();

use officeApp\Model\Employee;
use officeApp\Model\Role;
include('Model/Employee.php');
include('Model/Role.php');

$employee = new Employee();
$mode = $employee->set_mode("new");
$employee->set_employee_id($employee->uniqidReal());

$role = new Role();

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // set the item id to show old value in the form
  if (empty($_POST["employee_id"])) {
    $errors['mode'] = "Initial Check";
    $errors['status'] = "error";
    $errors['message'][]  = "Employee Id Field is Required";    
  } else {
    $employee_id = $employee->dbHandler->sanitize($_POST["employee_id"]);
    $employee->set_employee_id($employee_id);    
  }

  // set the item id to show old value in the form
  if (empty($_POST["employee_first_name"])) {
    $errors['mode'] = "Initial Check";
    $errors['status'] = "error";
    $errors['message'][]  = "First Name Field is Required";
  } else {
    $employee_first_name = $employee->dbHandler->sanitize($_POST["employee_first_name"]);
    $employee->set_fname($employee_first_name);
    
  }

  // set the item id to show old value in the form
  if (empty($_POST["employee_last_name"])) {
    $errors['mode'] = "Initial Check";
    $errors['status'] = "error";
    $errors['message'][]  = "Last Name Field is Required";
  } else {
    $employee_last_name = $employee->dbHandler->sanitize($_POST["employee_last_name"]);
    $employee->set_lname($employee_last_name);    
  }

  // set the item id to show old value in the form
  if (empty($_POST["employee_mobile"])) {
    $errors['mode'] = "Initial Check";
    $errors['status'] = "error";
    $errors['message'][]  = "Mobile Field is Required";    
  } else {
    $employee_mobile = $employee->dbHandler->sanitize($_POST["employee_mobile"]);
    $employee->set_mobile($employee_mobile);    
  }

  // set the item id to show old value in the form
  if (empty($_POST["employee_address"])) {
    $errors['mode'] = "Initial Check";
    $errors['status'] = "error";
    $errors['message'][]  = "Address Field is Required";
  } else {
    $employee_address = $employee->dbHandler->sanitize($_POST["employee_address"]);
    $employee->set_address($employee_address);    
  }

  // set the item id to show old value in the form
  if (empty($_POST["employee_email"])) {
    $errors['mode'] = "Initial Check";
    $errors['status'] = "error";
    $errors['message'][]  = "Email Field is Required";
  } else {
    $employee_email = $employee->dbHandler->sanitize($_POST["employee_email"]);
    $employee->set_id($employee_email);    
  }

  // set the item id to show old value in the form
  if (empty($_POST["employee_role"])) {
    $errors['mode'] = "Initial Check";
    $errors['status'] = "error";
    $errors['message'][]  = "Role Field is Required";
  } else {
    //$employee_role = $employee->dbHandler->sanitize($_POST["employee_role"]);
    $employee_role = $_POST["employee_role"];
    $employee->set_roles($employee_role); 
  }

  // submit the form
  if(empty($errors)) {    
    $employee_id = $_POST["employee_id"];    
    $employee_first_name = $_POST["employee_first_name"];    
    $employee_last_name = $_POST["employee_last_name"];    
    $employee_mobile = $_POST["employee_mobile"];    
    $employee_address = $_POST["employee_address"];    
    $employee_email = $_POST["employee_email"];
    $employee_role = $employee_role;

    $employee = new Employee(null,$employee_id, $employee_first_name, $employee_last_name, $employee_mobile, $employee_address, $employee_email, $employee_role);
    $results = $employee->save();
    
    $_SESSION['response'] = $results;
    
    // Reset the form
    $employee = new Employee();
    $mode = $employee->set_mode("new");
    $employee->set_employee_id($employee->uniqidReal());

  }
}
?>