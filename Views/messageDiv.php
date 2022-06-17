<div class="row">
<?php

use officeApp\Model\Employee;

if (!empty($errors)) {
        // this is in array format
        $errors = $errors;
        // this is in json format
        $errors = json_encode($errors);
        // this is in json Object format
        $errors = json_decode($errors);
    echo "<div class=\"alert alert-danger\" role=\"alert\">";
    echo "Please fix the following errors:<br/>";
    echo "<ul>";
    foreach ($errors->message as $error) {
      echo "<li>" . $error . "</li>";
    }
    echo "</ul>";
    echo "</div>";
  }
 
  if (!empty($_SESSION['response'])) {
    // this is in array format
    $response = $_SESSION['response'];
    // this is in json format
    $response = json_encode($response);
    // this is in json Object format
    $response = json_decode($response);
    
    if($response->status == "success"){
        echo "<div class=\"alert alert-success\" role=\"alert\">";
        echo $response->message;
        echo "</div>";
    } else {
        echo "<div class=\"alert alert-danger\" role=\"alert\">";
        echo $response->message;
        echo "</div>";
    }
    unset($_SESSION['response']);   
  }
  ?>
</div>
