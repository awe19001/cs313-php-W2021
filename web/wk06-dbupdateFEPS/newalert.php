<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="alertstyle.css">
    <title>New Alert</title>
</head>
<body>

<div class="container" style="width: 500px; height: 1000px; border: 2px solid red; margin-top: 3px;">
 
   <h3> Alerts here! </h3>
   <div>
   <div class="alert">
  <span class="closebtn">&times;</span>  
  <strong>Danger!</strong> "The world is a dangerous place, not because of those who do evil, but because of those who look on and do nothing."
-- Einstein Quotes
</div>

<div class="alert success">
  <span class="closebtn">&times;</span>  
  <strong>Success!</strong> "It is better to fail in originality than to succeed in imitation."
-- Herman Melville
</div>

<div class="alert info">
  <span class="closebtn">&times;</span>  
  <strong>Info!</strong> "You can have data without information, but you cannot have information without data."
-- Daniel Keys Moran
</div>

<div class="alert warning">
  <span class="closebtn">&times;</span>  
  <strong>Warning!</strong> "You've just got to follow your own path. You have to trust your heart and you have to listen to the warnings."
-- Chaka Khan
</div>


<div> 
<form> 
  <p>First name: <input type="text" id="fname" name ="firstname"></p>
  <p>Last name: <input type="text" id="lname" name="lastname"></p>
  <p><input type="button" value="Submit" id="namebutton"></p>
  <script>
    // Just get a reference to the element
    var fname = document.getElementById("fname");
    var lname = document.getElementById("lname");
    document.getElementById("namebutton").addEventListener("click", function () { 
      // Then, use the properties of the (already gotten) elment as you need them:
      alert('Hello ' + fname.value + " " + lname.value);
    })
  </script>
</form>
</div>

<h3> See list of family events here! </h3>
<div>
    <p>
	 <a href="#">	New Year </a> </br>
     <a href="#">	Valentines </a> </br>
     <a href="#">	Labor Day </a> </br>
     <a href="#">	Independence Day </a> </br>
     <a href="#">	others.. </a></br>

	</p>

</div>

   </div>

</div>
<br />



<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
</script>

</body>
</html>