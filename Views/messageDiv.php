<?php
<<<<<<< HEAD
if (!empty($errors)) {
=======

use officeApp\Model\Employee;

if (!empty($errors)) {
    echo "<div class=\"alert alert-danger\" role=\"alert\">";
>>>>>>> 088a2119c53291925294729ac0efba0003862045
    echo "<ul>";
    foreach ($errors as $error) {
      echo "<li>" . $error . "</li>";
    }
    echo "</ul>";
<<<<<<< HEAD
  }
  
 //var_dump($employee->results);
  
//   if (!empty($employee->results)) {
//     foreach ($employee->results as $result) {
//         if($result['status'] == "success") {
//             echo "<div class=\"alert alert-success\" role=\"alert\">";
//             echo "<li>" . $result['message'] . "</li>";
//             echo "</div>";
//         } else {
//             echo "<div class=\"alert alert-danger\" role=\"alert\">";
//             echo "<li>" . $result['message'] . "</li>";
//             echo "</div>";
//         }
//     }
//   }
=======
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
>>>>>>> 088a2119c53291925294729ac0efba0003862045
  ?>