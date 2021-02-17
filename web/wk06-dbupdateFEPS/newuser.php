
<?php
// define variables and set to empty values
$nameErr = $emailErr = $passwordErr = $roleErr = "";
$name = $email = $password = $role = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = test_input($_POST["name"]);
  // check if name only contains letters and whitespace
  if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
    $nameErr = "Only letters and white space allowed";
  }
}
    
    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }
    }
      
    if (empty($_POST["password"])) {
      $passwordErr = "";
    } else {
      $password = test_input($_POST["password"]);
    }
   
    if (empty($_POST["role"])) {
      $roleErr = "Role is required";
    } else {
      $role = test_input($_POST["role"]);
    }
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="newuser.css">
    <title>New User Form</title>
</head>
<body>

<div class="container">
    <h2 class="text-center">Register New User Here!</h2>
    <p><span class="error">* required field</span></p>

    <form method="POST"  action="welcomeuser.php">  
   
   Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="email" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Password: <input type="password" name="password">
  <span class="error"><?php echo $passwordErr;?></span>
  <br><br>
  Role:
  <input type="radio" name="role"  <?php if (isset($role) && $role=="Creator") echo "checked";?> value="Creator">Creator
  <input type="radio" name="role"  <?php if (isset($role) && $role=="Follower") echo "checked";?> value="Follower">Follower
  <input type="radio" name="role"  <?php if (isset($role) && $role=="Observant") echo "checked";?> value="Observant">Observant
  <span class="error">* <?php echo $roleErr;?></span>
  <br><br>
  <button type="submit" name="submit" class="btn btn-primary btn-block" value="submit"> Register Now</button>
       <br />
</form>

</div>

</body>
</html> 

