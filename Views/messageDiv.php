<?php
if (!empty($errors)) {
  echo "<div class=\"alert alert-danger\" role=\"alert\">";
    echo "<ul>";
    foreach ($errors as $error) {
      echo "<li>" . $error . "</li>";
    }
    echo "</ul>";
    echo "</div>";
  }

  
  
  
//  var_dump($employee->results);
  
  if (!empty($employee->results)) {
   
        if($employee->results['status'] == "success") {
            echo "<div class=\"alert alert-success\" role=\"alert\">";
            echo "<li>" . $employee->results['message'] . "</li>";
            echo "</div>";
        } else {
            
            echo "<li>" . $employee->results['message'] . "</li>";
            
        }
    
  }
?>