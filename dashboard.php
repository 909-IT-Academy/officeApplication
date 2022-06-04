
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dashboard.css?<?= filemtime('css/dashborad.css'); ?>">
</head>
<?php
// Start the session
session_start();
?>
<?php
if (isset($_POST['submit'])) {
    if (!empty($_POST['role'])) {
        $selected = $_POST['role'];

        $_SESSION["roleValue"] = $selected;
    }
}



?> 
<div class="user-status d-flex flex-row justify-content-end">
<?php
// Echo session variables that were set on previous page

echo "Your name:"."(". $_SESSION["roleValue"] .")" .".";
?>

</div>


<body>
    <div class="container-fluid " style="min-height:100%;">
        <?php include "navbar.php" ?>

        <div class="container mt-5 ">
            <div class="row d-flex flex-md-column flex-lg-row">
                <div class="col d-flex flex-column align-items-center justify-content-center">
                    <div class="row">
                        <div class="col-3 d-flex flex-column justify-content-center">
                            <img src="" alt="" width="50" height="45" style="border:solid; border-color:black">
                        </div>
                        <div class="col d-flex flex-column align-items-start">
                            <h4>Company announcement 1</h4>
                            <p>The company president made an announcement about the merger.
                                He asked us to pay attention because he had an important announcement to make.
                                I saw their wedding announcement in the newspaper.</p>
                        </div>
                    </div>
                    <div class="row mt-5">
                    <div class="col-3 d-flex flex-column justify-content-center">
                            <img src="" alt="" width="50" height="45" style="border:solid; border-color:black">
                        </div>
                        <div class="col d-flex flex-column align-items-start">
                            <h4>Company announcement 1</h4>
                            <p>The company president made an announcement about the merger.
                                He asked us to pay attention because he had an important announcement to make.
                                I saw their wedding announcement in the newspaper.</p>
                        </div>
                    </div>
                    <div class="row mt-5">
                    <div class="col-3 d-flex flex-column justify-content-center">
                            <img src="" alt="" width="50" height="45" style="border:solid; border-color:black">
                        </div>
                        <div class="col d-flex flex-column align-items-start">
                            <h4>Company announcement 1</h4>
                            <p>The company president made an announcement about the merger.
                                He asked us to pay attention because he had an important announcement to make.
                                I saw their wedding announcement in the newspaper.</p>
                        </div>
                    </div>
                </div>
                <div class="col d-flex flex-md-row flex-column align-items-center justify-content-center">
                    <table>
                        <tr>
                            <th>Name(Job title)</th>
                            <th>Age</th>
                            <th>Department</th>
                            <th>Extension</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="dist/jquery.validate.js"></script>
    <script src="lib/jquery.form.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="lib/jquery.form.js"></script>

</body>
<?php include "footer.php" ?>


</html>