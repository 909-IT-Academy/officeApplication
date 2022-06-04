<?php

namespace officeApp;

use officeApp\Model\Employee;

include('Model/Employee.php');

$employee = new Employee(null, "Ashish", "Gurung", "0420690617","Campsie, Australia", "AshishDeveloper@gmail.com");
$employee->save();

echo $employee->get_email();
echo "<br/>";
echo $employee->get_fname();
echo "<br/>";
echo "<pre>";
var_dump($employee);
echo "</pre>";

?>