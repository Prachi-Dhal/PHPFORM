<html>

<body>
<?php include 'dbconnection.php';?>
<?php
$selectSQL = 'SELECT * FROM `details`';
mysqli_query( $con,$selectSQL );
// $sql = "UPDATE details SET name='jinni' WHERE id=15";
$sql="update details SET name='$_POST[name]','$_POST[email]','$_POST[gender]' WHERE id='$_POST[id]'";
if(mysqli_query( $con,$sql))
header("refresh:1 ;url=index.php");
else
echo"not update";
// $sql = "UPDATE details". "SET name = $_POST[name],email=$_POST[email],$_POST[gender] ". 
//                "WHERE id = $_POST[id]" ;
//             mysql_select_db('form');
//             $retval = mysql_query( $sql, $con);
            
//             if(! $retval ) {
//                die('Could not update data: ' . mysql_error());
//             }
//             echo "Updated data successfully\n";
            
//             mysql_close($con);
//          }
//          else{
//              echo "not updated";
//          }
?>
</body>
</html>