

<!DOCTYPE HTML>
<html> 
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css"> 

  <style>
    form{
      background-color:orange;
      margin:50px auto;
      width:60%;
      padding:20px;
    }
  </style>
</head>

<body> 
<?php include 'dbconnection.php';?>
<?php
$id= $_GET['id'];

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
  
  
  <?php
  
$row = mysqli_fetch_array($selectRes);
// echo $row['name'];

  
?>


<form action="welcome.php" method="post">
<div class="field">
  <label class="label">Name</label>
  <div class="control">
    <input class="input is-danger" type="text" name="name" value="<?php echo $row['name'] ?>" required="" placeholder="Text input">
  </div>
</div>



<div class="field">
  <label class="label">Email</label>
  <div class="control has-icons-left has-icons-right">
    <input class="input is-danger" type="email" name="email" required="" value="<?php echo $row['email'] ?>" placeholder="Email input">
    <span class="icon is-small is-left">
      <i class="fas fa-envelope"></i>
    </span>
    <span class="icon is-small is-right">
      <i class="fas fa-exclamation-triangle"></i>
    </span>
  </div>
  
</div>
<div class="field">
  <label class="label">Gender</label>
<label class="radio">
        <input type="radio" name="gender"  value="male" <?php if ($row['gender'] == 'male') {echo ' checked ';} ?>>
        male
      </label>
      <label class="radio">
        <input type="radio" name="gender" value="female" <?php if ($row['gender'] == 'female') {echo ' checked ';} ?> >
       female
      </label><br><br>
<input type="submit" value="update" class="button is-warning">
<!-- <a class="button is-warning">submit</a> -->
<!-- <a class="button is-primary">EDIT</a>
<a class="button is-link">DELETE</a> -->

</form> 

<!-- <a class=$date=date("Y-m-d H:i:s");/a> -->
<!-- <a class=$date=date("Y-m-d H:i:s");>
<a class="butt$date=date("Y-m-d H:i:s");

</form> 
<?php
$selectSQL = 'SELECT * FROM `details`';
mysqli_query( $con,$selectSQL );
// $sql = "UPDATE details SET name='jinni' WHERE id=15";
$sql="update details SET name='$_POST[name]','$_POST[email]','$_POST[gender]' WHERE id='$_POST[id]'";
if(mysqli_query( $con,$sql))
header("refresh:1 ;url=index.php");
else
echo"not update";
?>



</body>
</html>

