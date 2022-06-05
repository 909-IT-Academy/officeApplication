<?php
if (!empty($errors)) {
    echo "<ul>";
    foreach ($errors as $error) {
      echo "<li>" . $error . "</li>";
    }
    echo "</ul>";
  }
  
 var_dump($employee->results);
  
  if (!empty($employee->results)) {
    foreach ($employee->results as $result) {
        if($result['status'] == "success") {
            echo "<div class=\"alert alert-success\" role=\"alert\">";
            echo "<li>" . $result['message'] . "</li>";
            echo "</div>";
        } else {
            echo "<div class=\"alert alert-danger\" role=\"alert\">";
            echo "<li>" . $result['message'] . "</li>";
            echo "</div>";
        }
    }
  }
  ?>