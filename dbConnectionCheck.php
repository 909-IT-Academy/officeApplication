<?php
namespace officeApp;

use officeApp\Database\DbHandler;
include('Database/DbHandler.php');

$dbHandler = new DbHandler();
$results = $dbHandler->results;

echo "<pre>";
var_dump($results);
echo "</pre>";
?>
