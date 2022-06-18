
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

            $servername = "localhost";
            $username = "root";
            $password = "";
            $databasename = "officeapp";

            // CREATE CONNECTION
            $conn = new mysqli(
                $servername,
                $username,
                $password,
                $databasename
            );

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $query = "SELECT * FROM `employee`;";

            $result = $conn->query($query);

            if ($result->num_rows > 0) {
                // OUTPUT DATA OF EACH ROW
                while ($row = $result->fetch_assoc()) {
                    echo
                    "<tr><td> " . $row["id"] . "</td><td>" .
                        $row["fname"] . "&nbsp" .  $row["lname"] . "</td>" .
                        "<td></td>" . "<td></td>" . "<td></td></tr>";
                }
            } else {
                echo "0 results";
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