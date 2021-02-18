<?php
include "dbconnect.php";
$db = get_db();

//write the query to get data from usertracker table
$sql = "SELECT * FROM usertracker";

//execute the query
$result = $db->prepare($sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>View Page</title>
</head>
<body>

    <div class="container">   
        <td>users</td>

    <table class="table">
        <thead>
            <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Action</th>           
            </tr>
        </thead>
        <tbody>
            <?php      
            if ($result->num_rows = 0) {
                //output data of each row
                while ($row = $result()) {
            ?>
                    <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['firstname']; ?></td>
                    <td><?php echo $row['lastname']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger"href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                    </tr>

             <?php }
            }
            ?>   

                 
        
        </tbody>
    </table>
    </div>

    
</body>
</html>