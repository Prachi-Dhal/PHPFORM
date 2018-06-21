<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css"> 
<style>
table{
  border-collapse: collapse;
  
  margin: 0 auto;
}
td,th{
  padding: 6px;
}
</style>
</head>
<body>
<?php include 'dbconnection.php';?>
<?php
// if( !( $insertRes = mysqli_query( $insertSQL ) ) ){
//     echo '<p>Insert of Row into Database Failed - #'.mysql_errno().': '.mysql_error().'</p>';
//   }else{
//     echo '<p>Person\'s Information Inserted</p>'
//   }

 # Prepare the SELECT Query
  $selectSQL = 'SELECT * FROM `details`';
 # Execute the SELECT Query
  if( !( $selectRes = mysqli_query( $con,$selectSQL ) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
  }else{
    ?>
<table width="800"border="2">
  <thead>
    <tr>
    <th>id</th>
      <th>Name</th>
      <th>email</th>
      <th>gender</th>
      <th>creation_time</th>
      <th>view</th>
      <th>action</th>
      <th>update</th>
    </tr>
  </thead>
  <tbody>
    <?php
   
      if( mysqli_num_rows( $selectRes )==0 ){
        echo '<tr><td colspan="7">No Rows Returned</td></tr>';
      }else{
        while( $row = mysqli_fetch_assoc($selectRes ) ){
          echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['email']}</td><td>{$row['gender']}</td><td>{$row['creation_time']}</td>";
          $id=$row['id'];
          // <a class="button is-primary">view</a>;
       echo "<td><a href=user_account.php?userid=$id> View</a></td>\n";
        echo "<td><a href=delete.php?id=$id> Delete</a></td>\n";
        echo "<td><a href=updateform.php?id=$id> edit</a></td></tr>\n";
        
        }
      }
     
    
  }
//   echo ('<a href="user_account.php?id=' . $id . '">' . $name . '</a>');

?>
</body>
</html>