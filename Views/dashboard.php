
    <div class="row d-flex flex-md-column flex-lg-row">
    <div class="col d-flex flex-column align-items-center justify-content-center">
        <div class="row">
            <div class="col-3 d-flex flex-column justify-content-center">
                <img src="img/news_image1.jpg" alt="" width="70" height="65" style="border:solid; border-color:black">
            </div>
            <div class="col d-flex flex-column align-items-start">
                <h4>Company announcement 1</h4>
                <p>The company president made an announcement about the merger.
                    He asked us to pay attention because he had an important announcement to make.
                    I saw their wedding announcement in the newspaper.</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-3 d-flex flex-column justify-content-center">
                <img src="img/news_image2.jpg" alt=""width="70" height="65" style="border:solid; border-color:black">
            </div>
            <div class="col d-flex flex-column align-items-start">
                <h4>Company announcement 1</h4>
                <p>The company president made an announcement about the merger.
                    He asked us to pay attention because he had an important announcement to make.
                    I saw their wedding announcement in the newspaper.</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-3 d-flex flex-column justify-content-center">
                <img src="img/news_image3.jpg" alt="" width="70" height="65" style="border:solid; border-color:black">
            </div>
            <div class="col d-flex flex-column align-items-start">
                <h4>Company announcement 1</h4>
                <p>The company president made an announcement about the merger.
                    He asked us to pay attention because he had an important announcement to make.
                    I saw their wedding announcement in the newspaper.</p>
            </div>
        </div>
    </div>

    


    <div class="col d-flex flex-md-row flex-column align-items-center justify-content-center">
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
  $conn = new mysqli($servername,
    $username, $password, $databasename);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

            $query = "SELECT * FROM `employee`;";

            $result =$conn->query($query);

            if ($result->num_rows > 0) 
             {
                // OUTPUT DATA OF EACH ROW
                while($row = $result->fetch_assoc())
                {
                    echo
                    "<tr><td> " .$row["id"]."</td><td>". 
                    $row["fname"]."&nbsp".  $row["lname"]."</td>".
                    "<td></td>"."<td></td>"."<td></td></tr>";
                }
            } 
            else {
                echo "0 results";
            }

        
        
        
        
        


?>
    </table>
    </div>
</div>
