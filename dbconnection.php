<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "form";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
// echo "Connected successfully";


// // Create database
//  $sql = "CREATE DATABASE form";
// if ($conn->query($sql) === TRUE) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . $conn->error;
// }

// $conn->close();
// $sql = "INSERT INTO details (name,email,gender)
// VALUES ('John', 'john@example.com','male')";
// $sql .= "INSERT INTO details (name,email,gender)
// VALUES ('Mary', 'mary@example.com','female')";

// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();

// $con=mysql_connect('localhost','root','root','form');

// if(!$con)
// {
//     echo 'Not Connected to Server';
// }

// if(!mysql_select_db($con,'infoorm'))
// {
//     echo 'Database Not Selected';
// }

// $name= $_POST['$name'];
// $email= $_POST['$email'];
// $Gender= $_POST['$gender'];
// $sql="INSERT INTO details(name,email,gender) VALUES ('$name','$email','$Gender')";

// if(!mysql_query($con,$sql))
// {
//     echo 'Not Inserted';
// }
// else {
//     echo 'Inserted';
// }
// header("refresh:2 ; url=index.php");
// ?>
 

</body>
</html>