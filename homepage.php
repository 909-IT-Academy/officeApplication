<?php
// Start the session
session_start();
?>

<?php
// Echo session variables that were set on previous page
echo "this is homepage "; 
echo "Your role is " . $_SESSION["roleValue"] . ".";
?>