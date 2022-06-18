<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css?<?= filemtime('css/style.css'); ?>">
    <script src="js/bootstrap.bundle.js"></script>
</head>

<body>
    <div class="container">
        <nav class=" mt-1 navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid ">
                <a class="navbar-brand" href="#">909IT</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class=" navbar-nav mb-2 mb-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Roles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#"> Employees</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Clients</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Time Sheet</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <span class="nav-item mb-2 pt-2"> icon </span>

                        <li class="nav-item dropdown">

                            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Profile User
                            </a>
                            <ul class="dropdown-menu ms-auto" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item ms-auto " href="#">Profile</a></li>
                                <li><a class="dropdown-item ms-auto" href="#">Logout</a></li>

                            </ul>
                        </li>
                    </ul>


                </div>
            </div>
    </div>
    </nav>
</body>

</html>