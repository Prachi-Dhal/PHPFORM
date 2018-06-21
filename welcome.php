<html>

<body>
<?php include 'dbconnection.php';?>


<?php
// $name=$_POST["name"];
// $email=$_POST["email"];
// $gender=$_POST["gender"];

// $con=mysql_connect('localhost','root','root','form');

// if(!$con)
// {
//     echo 'Not Connected to Server';
// }

// if(!mysql_select_db($con,'infoorm'))
// {
//     echo 'Database Not Selected';
// }

$name= $_POST['name'];
$email= $_POST['email'];
$gender= $_POST['gender'];
$nameErr = $emailErr = $genderErr = "";
$name = $email = $gender = "";

    if (empty($_POST["name"])) {
    echo $nameErr = "Name is required";
    }
    if (empty($_POST["email"])) {
       echo $emailErr = "Email is required";
      } 
      if (empty($_POST["gender"])) {
        echo $genderErr = "Gender is required";
      } 
    
?>
      name: <?php echo $_POST["name"]; ?><br>
      email: <?php echo $_POST["email"]; ?><br>
      gender: <?php echo $_POST["gender"]; ?></br>


<!-- // echo $name;
// echo $email;
// echo $gender;
// exit;
 // $sql="INSERT INTO details(name,email,gender) VALUES ($name,$email,$gender)";

 $sql = "INSERT INTO details (name, email, gender)
VALUES ('".$name."','".$email."','".$gender."');"; -->

<!-- // $sql="INSERT INTO details(name,email,gender) VALUES ($name,'hhh@dd','kkkk')";
$result = mysqli_query($con,$sql);
// echo $sql;
// if(!mysql_query($con,$sql))
// {
//     echo 'Not Inserted';
// }
// else {
//     echo 'Inserted';
// }
// header("refresh:2 ; url=index.php");
?> -->
<?php
 

//  if(isset($_POST['save']))
// {
    
//     $date = date('d m H:i:s');
    
      $name= $_POST['name'];
      $email= $_POST['email'];
      $gender= $_POST['gender'];
    $date=date("Y-m-d H:i:s");
    
//     $action="<a href=user_account.php?userid=$id> Delete</a>";
   
   $sql = "INSERT INTO details(name, email, gender,creation_time)
   VALUES ('$name','$email','$gender','$date')";
   //echo $sql;
   $result = mysqli_query($con,$sql);
   if ($con->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $con->error;
  }
// }

// ?>
<?php
//     echo filemtime("test.txt");
//     echo "<br />";
//     echo "Last modified: ".date("F d Y H:i:s.",filemtime("test.txt"));
// ?>


</body>
</html>