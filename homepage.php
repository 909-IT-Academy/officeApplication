<?php
// Start the session
session_start();
?>
<?php
                            if (isset($_POST['submit'])) {
                                if (!empty($_POST['role'])) {
                                    $selected = $_POST['role'];
                                    
                                   $_SESSION["roleValue"]=$selected;
                                } 
                            }
                            ?> 
<?php
// Echo session variables that were set on previous page
echo "this is homepage "; 
echo "Your role is " . $_SESSION["roleValue"] . ".";
?>