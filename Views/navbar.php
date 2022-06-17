<style>
     .navbar-nav a:hover {
        background-color:#ff8080;
        font-weight: bold;
    }

</style>


<?php
if (isset($_POST['submit'])) {
    if (!empty($_POST['role'])) {
        $selected = $_POST['role'];

        $_SESSION["roleValue"] = $selected;
    }
}
?> 
<div class="container-fluid d-flex justify-content-end">
<?php
// Echo session variables that were set on previous page
echo "<i>Fname lname&nbsp(</i>" . $_SESSION["roleValue"] . ").";
?>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="dashboard.php">
            <img src="img/909-logo.png" alt="" width="120" height="45" class="d-inline-block align-text-top"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="dashboard.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="roles.php">Roles</a>
                </li>
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Employees
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="employee.php">Add Employee</a></li>
                            <li><a class="dropdown-item" href="employeeView.php">View Employees</a></li>
                        </ul>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" href="clients.php">Clients</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="timesheet.php">Timesheet</a>
                </li>
            </ul>
            <a href="" class="d-flex">Logout</a>
        </div>
    </nav>
</div>