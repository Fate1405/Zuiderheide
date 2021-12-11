<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <script src="./resources/scripts/jquery.js"></script>
    <script>

    </script>
</head>
<body>
    <h1>Testing</h1>
    <div>
        <?php

        $servername = "localhost";
        $username = "fate1405";
        $password = ")qvIfQ(z1u?l";
        $dbname = "worms";

        $conn = new mysqli($servername, $username, $password, $dbname);


        if ($conn->connect_error) {
            echo "fail";
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";

        $sql = "UPDATE maindatadb SET Visitors = Visitors + 1;";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
        ?>
    </div>
    <div class="buttons">
        <ul>
            <li></li>
            <li></li>
        </ul>
    </div>
</body>
</html>