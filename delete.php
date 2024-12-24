<!DOCTYPE html>
<html>

    <head>
        <title>Select Page</title>
    </head>

    <body>
        <center>
            <?php 
                $servername = "127.0.0.1";
                $username = "root";
                $password = "mysqlpassword";
                $dbname = "myDB";

                $conn = new mysqli($servername, $username, $password, $dbname);
                
                if ($conn->connect_error) {
                    die("Error establishing DB connection". $conn->connect_error);
                }

                $id = $_REQUEST ["id"];

                $sql = "SELECT * FROM myGuest WHERE id = $id";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo 
                         "Name: ". $row["f_name"] 
                        ." Last name: ". $row["l_name"] 
                        ." Phone: ". $row["p_number"] 
                        ." Age: ". $row["age"] 
                        ." Email: ". $row["email"] 
                        ." ID: ". $row["id"];
                    }
                } else {
                    echo "0 Results";
                }

                $conn-> close();
                ?>
        </center>
    </body>

</html>
