<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>

    <a href="index.html">  HOME PAGE  </a>
    <a href="services.html"> SERVICES PAGE</a>
    <a href="contact.html">CONTACT US</a>


    <br><br> <br>

<form action="" method="post">
<fieldset>
    <legend>Fill the form & submit</legend>
    <input name="names" type="text" placeholder="type your name" >
    <br>
    Gender <br>
    <input type="radio" name="gender" > Male 
    <input type="radio" name="gender"> Female <br>

    <input type="number" placeholder="enter phone no" name="phone">

    <br><br>
    <input type="text" name="location" placeholder="enter your location"><br>


    Choose your prefered vehicle <br>
    <select name="vehicle" id="">
        <option value=""> Fielder</option>
        <option value=""> Honda Insight</option>
        <option value=""> 32 Seater Matatu</option>
        <option value=""> 6 Seater Matatu</option>
    </select>
 <br>

 Date of Hire <br>
 <input type="date" name="doh">

 <br>


  <input name="days" type="number" placeholder="number of days">  <br>

  <input name="people" type="number" placeholder="enter the number of people"> <br>
  
  Any other information <br>
  
  <textarea name="others">

  </textarea>
  <br>

  <input required type="checkbox"> Agree terms & conditions  <br>

  <input type="submit" name="submit" id="">
  
  <input type="reset">


</fieldset>



</form>

<?php
if(isset($_POST['submit']))
{
  $a= $_POST['names'];
  $b= $_POST['gender'];
  $c= $_POST['phone'];
  $d= $_POST['location'];
  $e= $_POST['vehicle'];
  $f=$_POST['doh'];
  $g=$_POST['days'];
  $h=$_POST['people'];
  $i=$_POST['others'];

  $con=mysqli_connect("root@localhost","root","","ecarhire");
  $q="INSERT INTO booking VALUES('','$a','$b','$c','$d','$e','$f','$g','$h','$i');";
  mysqli_query($con,$q);
   
}




?>

    
</body>
</html>