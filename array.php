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

?>