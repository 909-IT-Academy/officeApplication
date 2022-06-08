<?php
namespace officeApp;

use officeApp\Model\Employee;
include('Model/Employee.php');

$employee = new Employee();
$mode = $employee->set_mode("new");

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
  if(empty($errors)) {    
    $employee_id = $_POST["employee_id"];    
    $employee_first_name = $_POST["employee_first_name"];    
    $employee_last_name = $_POST["employee_last_name"];    
    $employee_mobile = $_POST["employee_mobile"];    
    $employee_address = $_POST["employee_address"];    
    $employee_email = $_POST["employee_email"];   

    $employee = new Employee(null, $employee_first_name, $employee_last_name, $employee_mobile, $employee_address, $employee_email);
    $employee->save();
    
    $employee_id = "";    
         $employee_first_name = "";    
            $employee_last_name = "";    
            $employee_mobile = "";    
            $employee_address = "";    
            $employee_email = ""; 

  }
}
?>