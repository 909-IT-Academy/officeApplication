<?php

use officeApp\Model\Employee;

if (!empty($errors)) {
    echo "<div class=\"alert alert-danger\" role=\"alert\">";
    echo "<ul>";
    foreach ($errors as $error) {
      echo "<li>" . $error . "</li>";
    }
    echo "</ul>";
    echo "</div>";
  }
 
  if (!empty($employee->results)) {
    if($employee->results['status'] == "success"){
        echo "<div class=\"alert alert-success\" role=\"alert\">";
        echo $employee->results['message'];
        echo "</div>";
    } else {
        echo "<div class=\"alert alert-danger\" role=\"alert\">";
        echo $employee->results['message'];
        echo "</div>";
    }   
  }
  ?>