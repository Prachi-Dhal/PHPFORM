<html>


<body>
<?php include 'dbconnection.php';?>
<?php
$id= $_GET['userid'];

$selectSQL = 'SELECT * FROM details WHERE id='.$id;



//  echo $selectSQL;
//echo $id;
// echo $name;
if(( $selectRes = mysqli_query( $con,$selectSQL ) ) )
{
  //echo 'PASS';
  // echo 'Retrieval of';
 
 
  //   echo 'Retrieval of data from Database Failed - #'.mysqli_errno().': '.mysql_error();
  } else {
    //echo 'Failed';
  };
  ?>
  
  <table width="800"border="2">
  <thead>
    <tr>
    <th>id</th>
      <th>Name</th>
      <th>email</th>
      <th>gender</th>
    </tr>
  </thead>
  <tbody>
  <?php
  
$row = mysqli_fetch_array($selectRes);

  echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['email']}</td><td>{$row['gender']}</td></tr>";
          $id=$row['id'];
?>

  
  
</body>
</html>
