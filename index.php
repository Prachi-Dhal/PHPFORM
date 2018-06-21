

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

<form action="welcome.php" method="post">
<!-- name: <input type="text" name="name"><br><br>
<!-- Last_Name: <input type="text" name="Last_Name"><br><br> -->
<!-- email: <input type="text" name="email"><br><br> -->
<!-- Gender:
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other<br><br> -->
<!-- <label class="radio">
        <input type="radio" name="gender"  value="male">
        male
      </label>
      <label class="radio">
        <input type="radio" name="gender" value="female">
       female
      </label>
<input type="submit">
</form> --> 

<div class="field">
  <label class="label">Name</label>
  <div class="control">
    <input class="input is-danger" type="text" name="name" required="" placeholder="Text input">
  </div>
</div>



<div class="field">
  <label class="label">Email</label>
  <div class="control has-icons-left has-icons-right">
    <input class="input is-danger" type="email" name="email" required="" placeholder="Email input" value="hello@">
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
        <input type="radio" name="gender"  value="male">
        male
      </label>
      <label class="radio">
        <input type="radio" name="gender" value="female">
       female
      </label><br><br>
<input type="submit" class="button is-warning">
<!-- <a class="button is-warning">submit</a> -->
<!-- <a class="button is-primary">EDIT</a>
<a class="button is-link">DELETE</a> -->

</form> 






<!-- // // define variables and set to empty values
// $First_NameErr = $Last_NameErr = $emailErr = $GenderErr = "";
// $First_Name = $Last_Name = $email = $Gender = $comment = $website = "";

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   if (empty($_POST["First_Name"])) {
//     $First_NameErr = "Name is required";
//   } else {
//     $First_NameErr= test_input($_POST["First_Name"]);
//   }
//   if (empty($_POST["email"])) {
//     $emailErr = "Email is required";
//   } else {
//     $email = test_input($_POST["email"]);
//   }
// }
// ?> -->
</body>
</html>

