<?php include 'navigation.php'; ?>
<div class="firstClient d-flex container justify-content-start">
    <div class=" dropdown mt-4 me-2">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Please select the client
        </button>

        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li class="dropdown-item"> Client 1 </li>
            <li class="dropdown-item"> Client 2</li>
            <li class="dropdown-item"> Client 3 </li>
        </ul>
    </div>

    <div class="dropdown mt-4 me-2">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Please select the job
        </button>

        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li class="dropdown-item"> Job 1 </li>
            <li class="dropdown-item"> Job 2</li>
            <li class="dropdown-item"> Job 3 </li>
        </ul>
    </div>

    <div class="mt-4 me-2">
        <label for="time"></label>
        <input type="text" id="time" name="time" placeholder="Time">
    </div>
    <div class="me-2">
        <label for="exampleFormControlTextarea1" class="form-label"></label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Job Description"></textarea>
    </div>
    <div class="mt-4 me-5">
        <label for="pos"></label>
        <select id="pos" name="pos">
            <option value="account">Account Director</option>
            <option value="saab">Director</option>
        </select>
    </div >
    <div class="mt-4 ms-2"> + </div>

</div>