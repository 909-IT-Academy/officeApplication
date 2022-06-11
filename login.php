<!-- 
Bootstrap 5.1
Developer : Dibesh Sharma
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aashish edit</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css?<?= filemtime('css/style.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/bootstrap.bundle.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="lib/jquery.form.js"></script>
    <script src="dist/jquery.validate.js"></script>
    <script src="https://kit.fontawesome.com/70c966dfe1.js" crossorigin="anonymous"></script>
    <script src="js/login.js"></script>
</head>


<body>
    <div class="container text-uppercase fs-4 ">
        <div class="row" style="min-height:100vh">
            <div class="d-flex justify-content-center align-items-center">
               <form action="chooseRole.php" name="loginForm" class="p-5 border" method="POST">
                    <div class="p-2 bd-highlight">

                <form name="loginForm" class="p-5 border border-dark rounded-3 shadow-lg p-3 mb-5 bg-body rounded">
                    <div class="mb-3 ">
                        <div class="error_pacement">
                            <div class="d-flex flex-row">
                                <div class="error_sign" id="er_icon">
                                    <i class="fa-solid fa-triangle-exclamation"></i>

                        <div class="mb-3 ">
                            <div class="error_pacement">
                                <div class="d-flex flex-row">
                                    <div class="error_sign" id="er_icon">
                                        <i class="fa-solid fa-triangle-exclamation"></i>

                                    </div>
                                    <div class="d-flex px-2 flex-column bd-highlight mb-3 ">
                                        <span class="error_sign" id="error"></span>
                                        <span class="received_error" id="error1"></span>
                                        <span class="received_error" id="error2"></span>

                                    </div>
                                </div>

                                <div class="d-flex px-2 flex-column bd-highlight mb-3 ">
                                    <span class="error_sign" id="error"></span>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="mb-3">
                        <label for="email" class="form-label" name="email">Email address</label>
                        <input type="email" class="form-control  border border-dark rounded-3 " id="email" name="email" aria-describedby="emailHelp">

                    </div>


                    </div>


                </form>

            </div>
        </div>
    </div>
</body>

</html>
