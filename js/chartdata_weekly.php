<?php
$array = array("chartData" => $arr, "users" => $users, "query" => $query_timesheet);

$myJSON = json_encode($array);
echo $myJSON;
?>