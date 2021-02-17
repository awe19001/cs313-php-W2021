<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="newuser.css">
    <title>Welcome New Registered User</title>
</head>
</head>
<body>


<div class="container"> 
Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?><br>
Your password is: <?php echo $_POST["password"]; ?><br>
You are a: <?php echo $_POST["role"]; ?><br>

<button class = "goback" onclick="goBack()">Go Back</button>



</div>

<script>
function goBack() {
  window.history.back();
}
</script>
</body>
</html>
