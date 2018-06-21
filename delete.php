<html>

<body>
<?php include 'dbconnection.php';?>
<?php
    
    echo "Connected";
    echo "<br>";
    $id = $_GET["id"];
    var_dump($id);

    
    $sql = "DELETE FROM details WHERE id='$id';";
    $statement = $con->prepare($sql);
    if ($statement->execute()) {
        header("Location:show.php");
    }

?>