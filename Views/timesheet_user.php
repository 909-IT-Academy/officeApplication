<form name="timesheet_user" class="field_wrapper timesheet_form" id="timesheet_user">
    <div class="dropdown mt-4 me-2">
        <div class="firstClient d-flex container justify-content-start">
            <div class="d-flex justify-content-between">
            </div>
            <div class="dropdown mt-4 me-2">
                <button class="btn border border-dark dropdown-toggle" type="button" id="clent_dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    Please select the client
                </button>
                <ul class="dropdown-menu" aria-labelledby="clent_dropdown">
                    <li class="dropdown-item"> Client 1 </li>
                    <li class="dropdown-item"> Client 2</li>
                    <li class="dropdown-item"> Client 3 </li>
                </ul>
            </div>
            <div class="dropdown mt-4 me-2">
                <button class="btn border border-dark dropdown-toggle" type="button" id="job_dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    Please select the job
                </button>
                <ul class="dropdown-menu" aria-labelledby="job_dropdown">
                    <li class="dropdown-item"> Job 1 </li>
                    <li class="dropdown-item"> Job 2</li>
                    <li class="dropdown-item"> Job 3 </li>
                </ul>
            </div>
            <div class=" mt-4 me-2">
                <label for="time"></label>
                <input class="border border-dark time" type="text" id="time" name="time" placeholder="Time">
            </div>
            <div class="me-2">
                <label for="exampleFormControlTextarea1" class="form-label"></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Job Description"></textarea>
            </div>
            <div class="mt-4 ">
                <label for="pos"></label>
                <select id="pos" name="pos">
                    <option value="account">Account Director</option>
                    <option value="saab">Director</option>
                </select>
            </div>
            <button type="submit" class="btn "><i class="fa-solid fa-plus"></i></button>
        </div>
</form>