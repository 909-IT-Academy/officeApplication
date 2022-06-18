<?php
//use officeApp\Model\Role;

$role = $role->get_all();
$role = json_encode($role);
$role = json_decode($role);
if ($role->status == "success") {
    ?>



<table class="table table-striped border border-dark">
    <thead>
        <tr>
            <th scope="col">S.no</th>
            <th scope="col">Roles</th>
            <th scope="col">Action</th>
        </tr>
    </thead>


    <tbody>
        <?php
        

        foreach ($role->data as $role) {
            $sno = $role->id;
            $role_name = $role->role_name;
        ?>

            <tr>
                <th scope="row"><?php echo $sno ?></th>
                <td><?php echo $role_name ?></td>
                <td>
                    <!-- kept in comment because didnt make sense to edit the name of role -->
                <!-- <i class="fa-solid fa-pen"></i> -->
                <i class="fa-solid fa-trash-can ps-4"></i>
                </td>
                <td></td>
            </tr>

        <?php
        }

        ?>

    </tbody>
    
</table>
<?php } else { ?>
    <div class="row">
        The list is currently empty. Please add roles <a href="roles_form.php">Add Employee</a>
    </div>

<?php } ?>
