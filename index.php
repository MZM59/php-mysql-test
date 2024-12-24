<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>
        <link rel="stylesheet" href="style.css"> 
    </head>
    <body>
            <center>
                    <h1>Storing Form data in Database</h1>
                    <form action="insert.php" method="post">

                        <label for="firstname">First name:</label><br>
                        <input type="text" name="f_name" id="firstname"><br>

                        <label for="lastname">Last name:</label><br>
                        <input type="text" name="l_name" id="lastname"><br>

                        <label for="Age">Age:</label><br>
                        <input type="text" name="age" id="Age"><br>

                        <label for="phonenumber">Phone number:</label><br>
                        <input type="text" name="p_number" id="phonenumber"><br>

                        <label for="Email">Email:</label><br>
                        <input type="text" name="email" id="Email"><br>

                        <label for="ID">ID:</label><br>
                        <input type="text" name="id" id="ID"><br>

                        <input type="submit" value="Submit">
                    </form>
                    <br><br>

                    <h1>Selecting data from Database</h1>

                    <form action="select.php" method="post">

                        <label for="ID">Enter guest ID:</label><br>
                        <input type="text" name="id" id="ID"><br>

                        <input type="submit" value="Submit">
                    </form>
                    <br><br>

                    <h1>Deleting data from Database</h1>

                    <form action="delet.php" method="post">
                        
                        <label for="ID">Enter guest ID:</label><br>
                        <input type="text" name="id" id="ID"><br>

                        <input type="submit" value="Submit">
                    </form>

            </center>
    </body>
</html>
