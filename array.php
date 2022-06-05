<?php

$results = [];
$results['status'] = "success";
$results['message'] = "Db Connection successfull";

var_dump($results);

echo "<pre>";
var_dump($results);
echo "</pre>";

foreach ($results as $result) {
    echo "<ul>";
    echo "<li>".$result."</li>";
    echo "</ul>";
}

$array1 = ["a","b"];
$array2 = ["status" => "success", "message" => "db connection successful"];

if (!empty($array1)) {
    echo "<div class=\"alert alert-danger\" role=\"alert\">";
    echo "<ul>";
    foreach ($array1 as $error) {
      echo "<li>" . $error . "</li>";
    }
    echo "</ul>";
    echo "</div>";
  }

  if (!empty($array2)) {
    echo "<div class=\"alert alert-danger\" role=\"alert\">";
    echo "<ul>";
    foreach ($array2 as $error) {
      echo "<li>" . $error . "</li>";
    }
    echo "</ul>";
    echo "</div>";
  }

  if (!empty($array2)) {
    echo "<div class=\"alert alert-danger\" role=\"alert\">";
    echo "<ul>";
    foreach ($array2 as $key => $value) {
      echo "<li>" . $key ." ". $value . "</li>";
    }
    echo "</ul>";
    echo "</div>";
  }

?>