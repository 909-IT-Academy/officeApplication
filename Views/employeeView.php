<?php

use officeApp\Model\Role;

$employeesArray = $employee->getAll();
//var_dump($employeesArray);
// die();

$employees = json_encode($employeesArray);
$employees = json_decode($employees);
if ($employees->status == "success") {
    foreach ($employeesArray['data'] as $employee) {
    $roles['uid'] = $role->get_role($employee['uid']);
   
    echo "<br>";
    }

    var_dump($roles);
 
?>


    <table class="table table-striped">
        <h4>Employee Table</h4>
        <thead>
            <tr>
                <th scope="col"> # </th>
                <th scope="col"> ID </th>
                <th scope="col"> Full Name </th>
                <th scope="col"> Phone Number </th>
                <th scope="col"> Address </th>
                <th scope="col"> Roles </th>
                <th scope="col"> Email </th>
                <th scope="col"> Action </th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;

            foreach ($employees->data as $employee) {
                $uid = $employee->uid;
                $fullName = $employee->fname . " " . $employee->lname;
                $fullName = ucfirst($fullName);
                $phoneNumber = $employee->mobile;
                $address = $employee->address;
                $email = $employee->email;
            
        
               
                echo "<tr>";
                echo "<th scope=\"row\"> $i </th>";
                echo "<td>$uid</td>";
                echo "<td>$fullName</td>";
                echo "<td>$phoneNumber</td>";
                echo "<td>$address</td>";
                echo "<td>"; 
            ?>
                <?php
                
               
                
                foreach ($roles->data as $role){
                    $role_name = $role->role_name;
                    echo "<li>". $role_name ."</li>";
                }

                ?>


            <?php

                echo "</td>";
                echo "<td>$email</td>";
                echo "<td>";
                echo "<i class=\"fa-solid fa-pen\"></i>";
                echo "<i class=\"fa-solid fa-trash-can ps-4\"></i>";
                echo "</td>";
                echo "</tr>";
                $i++;
            }

            ?>

        </tbody>
    </table>
<?php } else { ?>
    <div class="row">
        The list is currently empty. Please add employees <a href="employees.php">Add Employee</a>
    </div>

<?php } ?>