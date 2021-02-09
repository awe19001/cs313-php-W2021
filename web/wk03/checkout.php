<?php 
include("header.php"); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">  
    <title>Checkout</title>
</head>
<body>

<div class="container">
        <div class="row">
        <!--<div class="row">-->
            <div class="column">
                <div class="bill-to">
                    <p> Checkout </p>
                    <div class="form-one">
                        <form name="form1" action="" method="POST">
                               <input type="text" placeholder="First Name" name="firstname" required="required"> <br>
                               <input type="text" placeholder="Last Name" name="lastname" required="required"> <br>
                               <input type="text" placeholder="Email" name="email" required="required"> <br>
                               <input type="text" placeholder="Address" name="address" required="required"> <br>
                               <input type="text" placeholder="Contact Number" name="contact" required="required"> <br>
                               <input type="submit" name="submit1" value= "Complete Purchase Here!"> <br>
                               <a href="mycart.php"><input type="button" name="submit2" value= "Return To Cart"> </a><br>

                        </form>
                    </div>                          
            </div>
            </div>                          
            </div>
            <?php 
            if(isset($_POST["submit1"]))
            {
                $link=mysqli_connect("localhost", "root", "");
                mysqli_select_db($link, "youtube_project");
                mysqli_query($link, "insert into checkout_address values('', '$_POST[firstname]', '$_POST[lastname]', '$_POST[email]', '$_POST[address]', '$_POST[contact]',)");
                        
                ?>
            
            <script type="text/javascript">
                alert("Purchase complete successfully");
                </script>
           <?php 
            }
          ?>
            