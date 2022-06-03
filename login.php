<div class="container text-uppercase fs-4 ">
    <div class="row" style="min-height:100vh">
        <div class="d-flex justify-content-center align-items-center">
            <div class="p-2 bd-highlight">


                <form name="loginForm" class="p-5 border border-dark rounded-3 shadow-lg p-3 mb-5 bg-body rounded">
                    <div class="mb-3 ">
                        <div class="error_pacement">
                            <div class="d-flex flex-row">
                                <div class="error_sign" id="er_icon">
                                    <i class="fa-solid fa-triangle-exclamation"></i>

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

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control border border-dark rounded-3" id="password" name="password">
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="submit">submit</button>

                    </div>


                </form>

            </div>
        </div>
    </div>
</div>