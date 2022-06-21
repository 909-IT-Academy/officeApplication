<form class="d-flex  mt-5 w-50">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="form1">
            <button class="btn btn-outline-success" onclick="sarch()" type="button">Search</button>
        </form>
        
<div class="row d-flex flex-md-column flex-lg-row ">
    
    <div class="col d-flex flex-column align-items-center justify-content-center">
    
        <div class="spinner-border text-danger" role="status" id="loadUi">
            <span class="visually-hidden">Loading...</span>
        </div> 

        <div class="posts">

        </div>
    </div>

    <div class="col d-flex flex-md-row flex-column align-items-start justify-content-center mt-5">
        <table class="table table-striped">

            <tr>
                <th>ID</th>
                <th>Name(Job title)</th>
                <th>Age</th>
                <th>Department</th>
                <th>Extension</th>
            </tr>

            <?php
            $employees = $employee->getAll();
            $employees = json_encode($employees);
            $employees = json_decode($employees);

            if ($employees->status == "success") {
                $i =1; 
                foreach ($employees->data as $employee) {
                    $fullName = $employee->fname. " ".$employee->lname;
                    $fullName = ucfirst($fullName);

                    $uid = $employee->uid; 

                    $role_names = $role->get_role_name_from_id($uid);

                    echo "<tr> <td>".$uid."</td>";
                    echo "<td>".$fullName."&nbsp";
                    echo "(";
                    $c=1;
                   
                     foreach ($role_names['data'] as $role_name) {
                       
                        // var_dump($role_names['data']);
                       if ($c==count($role_names['data'])){
                        $operator = "";
                       }
                       else {
                        $operator = ",";
                       }
                       echo ucfirst($role_name['role_name']).$operator;
                       $c += 1;
                      
                    }
                    echo ")";
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td></td>";
                    

                }

            }


             ?>

            
        </table>
    </div>
</div>

<script>
    sarch();



    function sarch() {
        $(".posts").text(" ");
        var SarchBar = $("#form1").val();
        if (SarchBar == "") {
            var SarchBar = "latest";
        }
        $('#loadUi').show();
        var url = " https://newsapi.org/v2/everything?q=" + SarchBar + "&apiKey=5bad852f41fc4494b8103723e9d37a74";


        $.get(url, function(response) {
            $('#loadUi').hide();

            console.log(response.articles);
            for (i = 0; i < response.articles.length; i++) {
                var html = `<div class="row mt-5 border">
                <div class="col-4 d-flex flex-column justify-content-center">
                <img class ="img mr-5" src="${response.articles[i].urlToImage}" alt="" width="200" height="145"  >
            </div>
            <div class="col d-flex flex-column align-items-center m-4">
                <h4>${response.articles[i].title}</h4>
                <p>${response.articles[i].description}</p>
                <a href="${response.articles[i].url}" target="_blank" class="btn btn-secondary" >Read More</a>
            </div>
            </div>`;

                $(".posts").append(html);
            }

        });
    }
</script>