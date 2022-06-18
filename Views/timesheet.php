<form name="timesheet_user" class="m-4 p-4" id="timesheet_user">
    <div class="row form-add mb-2" id="firstRow">
        <div class="col">
            <input type="text" class="form-control" placeholder="First name" aria-label="First name">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
        </div>
        <div class="col">
            <button id="addRow" type="button" onclick="extend()">
                <i class="fa-solid fa-plus"></i></button>
        </div>
    </div>

</form>
<div class="formExtend">

</div>
<script>
    console.log("muji");

    function extend() {
        console.log("mujir");
        var html = `<form name="timesheet_user" class="m-4 p-4" id="timesheet_user2">
    <div class="row form-add mb-2" id="firstRow">
        <div class="col">
            <input type="text" class="form-control" placeholder="First name" aria-label="First name">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
        </div>
        <div class="col">
        <button id = "delRow" type = "button" onclick="deleteRow()">
        <i class="fa-solid fa-xmark"></i></button>
        </div>
        </div>
    </div></form>`

        $(".formExtend").append(html);
    }

    function deleteRow() {
     console.log("kera");
        line = document.getElementById("timesheet_user2");
       line.closest('#timesheet_user2').remove();
    }
</script>