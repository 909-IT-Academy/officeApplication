<div class="container">

    <!-- <div class="d-flex justify-content-between"> -->
    <div class="pt-5">
        <div class="d-flex row">

            <div class="pt-5">
                <button class="btn btn-light border-dark rounded" onclick="show_form()">Add Role</button>
            </div>

            <div class="d-flex justify-content-between">

                <div class=" pt-5">
                    <? include('roles_table.php') ?>
                </div>



                <div class="p-5 " id="roles_form">
                    <?php include('roles_form.php') ?>
                </div>


                <div id="staus_form">
                    
                </div>

            </div>
        </div>
    </div>





</div>

</div>



<script>
    function show_form() {

        document.getElementById('role_form').style.visibility = "visible"

    }
</script>



<style>
    #role_form {

        visibility: hidden;

    }
</style>