<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="newevent.css">
    <title>New Event Form</title>
</head>
<body>

<div class="container" style="width: 500px; height: 500px; border: 2px solid red; margin-top: 3px;">
    <h2 class="text-center">New Event Form</h2>

    <form method="POST" >
       <label>New Event</label>
       <input type="text" name="username" class="form-control" />
       <br />
      
       <input type="checkbox" id="role1" name="role1" value="Creation">
        <label for="role1"> I'm a creator</label><br>
        <input type="checkbox" id="role2" name="role2" value="Follower">
        <label for="role2"> I'm a follower</label><br>
        <input type="checkbox" id="role3" name="role3" value="Observant">
        <label for="role3"> I'm an observant</label><br>

       <label>Event Id</label>
       <input type="password" name="userid" class="form-control" />
       <br />
      
       <button type="submit" name="submit" class="btn btn-primary btn-block" value="submit"> Submit</button>
     
    </form>
</div>
<br />
</body>
</html>