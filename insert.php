<!DOCTYPE html>
<html>

    <head>
        <title>Insert Page</title>
    </head>

    <body>
            <center>
                    <?php 
                            $servername="127.0.0.1";
                            $username= "root";
                            $password= "mysqlpassword";
                            $dbname= "myDB";

                            $conn = new mysqli($servername, $username, $password, $dbname);
                            if ($conn->connect_error) {
                                die("DB connction ERROR". $conn->connect_error);
                            }
                            
                            $f_name = $_REQUEST ['f_name'];
                            $l_name = $_REQUEST ['l_name'];
                            $age = $_REQUEST ['age'];
                            $p_number = $_REQUEST ['p_number'];
                            $email = $_REQUEST ['email'];
                            $id = $_REQUEST ['id'];
                            
                            $sql = "INSERT INTO myGuest (f_name, l_name, age, p_number, email, id)
                            VALUES ('$f_name', '$l_name', '$age', '$p_number', '$email', '$id')";

                            if(mysqli_query($conn,$sql)) {
                                    echo "<h3>data stored in a database successfully.\n";
                                    echo " Please browse your localhost php my admin"
                                    . " to view the updated data</h3>"; 

                                    echo nl2br("\n$f_name\n$l_name\n "
                                        . "$age\n$p_number\n$email\n$id"); 

                            }else{
                                echo "ERROR: Hush! Sorry $sql. "
                                    . mysqli_error($conn);
                            }

                            $conn->close();
                    ?>
            </center>
    </body>

</html>
