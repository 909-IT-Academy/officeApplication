<?php include('phpScript.php') ?>
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
</head>
<body>
    <?php include('views/navbar.php') ?>
    <?php include('views/dashboard.php') ?>
</body>
</html>