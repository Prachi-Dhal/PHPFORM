<html>

<body>
<?php include 'dbconnection.php';?>
<?php
    #calculate 60 days in the future: seconds * minutes * hours * days + current time
    $itm=60*60*24*60+time();
    #create cookie
    setcookie('last_visit',date("d M G:i a"),$itm);
    #check if cookie exists
    if(isset($_COOKIE['last_visit'])) {
        $visit=$_COOKIE['last_visit'];
        echo "Your last visit was- " .$visit;
    }
    else {
        #no cookies
        echo "You have some stale cookies!" ;
    }
 ?>



</body>
</html>