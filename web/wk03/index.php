<?php include("header.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">  
    <title>Index</title>
</head>
<body>


    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
               <form action="manage_cart.php" method="POST"> 
                    <div class="card">
                        <img src="images/watch.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Watch</h5>
                            <p class="card-text">Price: Php 300.00</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Watch">
                            <input type="hidden" name="Price" value="300">
                        </div>
                    </div>    
               </form>            
            </div>

            <div class="col-lg-3">
               <form action="manage_cart.php" method="POST"> 
                    <div class="card">
                        <img src="images/earphones.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Earphone</h5>
                            <p class="card-text">Price: Php 100.00</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Earphone">
                            <input type="hidden" name="Price" value="100">
                        </div>
                    </div>    
               </form>            
            </div>

            <div class="col-lg-3">
               <form action="manage_cart.php" method="POST"> 
                    <div class="card">
                        <img src="images/iphoneBlack.png" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">iPhone Black</h5>
                            <p class="card-text">Price: Php 1550.00</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="iPhone Black">
                            <input type="hidden" name="Price" value="1550">
                        </div>
                    </div>    
               </form>            
            </div>

            <div class="col-lg-3">
               <form action="manage_cart.php" method="POST"> 
                    <div class="card">
                        <img src="images/iphonePink.png" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">iPhone Pink</h5>
                            <p class="card-text">Price: Php 1800.00</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="iphone pink">
                            <input type="hidden" name="Price" value="1800">
                        </div>
                    </div>    
               </form>            
            </div>

        </div>
    </div>
</body>
</html>