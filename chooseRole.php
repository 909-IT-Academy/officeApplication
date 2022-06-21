<?php
namespace officeApp;
use officeApp\Model\Role;
include('Model/Role.php');

$role = new Role();


$roles = $role->get_all();

?>
<?php
// Start the session  dd
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Role</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">


    <style>
        #ii {
            visibility: hidden;
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="row" style="min-height:100vh">

            <div class="d-flex flex-column justify-content-center align-items-center">
                <div class="row d-flex flex-row justify-content-center align-items-center ">
                    <img src="img/icon.png" style=" height:70px; width:75px"><br>
                    <p style="text-align: center;">Please select your Role:</p>
                </div>

                <div class="row justify-content-center align-items-center ">
                    <form action="dashboard.php" method="POST">

                        
                        <div class="row ">
                        <select name="role" id="role" onchange="changeFunc();">
                                <option value="" disabled selected>Choose option</option>
                            <?php
                            foreach ($roles['data'] as $role) {
                                $roleName = $role['role_name'];
                                
                                echo "<option value=".ucfirst($roleName).">".ucfirst($roleName)."</option>";
                               
                            }
                            ?>
                               </select>

                        </div>
                        <div class="row mt-3 ">
                            <input type="submit" name="submit" id="ii" value="SUBMIT">

                        </div>


                    </form>


                </div>
            </div>


        </div>


    </div>
    <script>
        function changeFunc() {
            var y = document.getElementById('role');
            var value = y.options[y.selectedIndex].value;
            if (value !== "") {
                document.getElementById("ii").style.visibility = 'visible';
            } else {
                document.getElementById("ii").style.visibility = 'hidden';

            }

        }
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="dist/jquery.validate.js"></script>
    <script src="lib/jquery.form.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="lib/jquery.form.js"></script>

</body>

</html>