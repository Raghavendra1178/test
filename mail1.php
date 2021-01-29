<?php 

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$reg=$_POST['registration'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$dob=$_POST['dob'];



$msg = "Hello $name
Welcome to xyz.in please find your details given below which you have submitted to us
$name
$reg
$email
$phone
$dob
Thank you
xyz.in";
$msg = wordwrap($msg,70);
 $a=mail("$email","My subject",$msg);
if($a==true)
{
    echo "<strong>mail sent successfully<strong>";
}
else{
    echo "mail not sent";
}


}

?>
<html>
    <head>
<style>
#a{
    position:relative;
    top:150px;
    left:400px;
    border:2px solid blue;
    width:600px;
    background-color:lightblue;
    height:400px;
}
.form1{
    padding:4px;
    margin:8px;
    position:relative;
    left:50px;
    height:40px;
    
    
}
#l{
    background-color:lightgreen;
}
.form2{
    height:30px;
    width:200px;
   
}
.form3{
    height:20px;
}
    </style>
    </head>
    <body>
    <div id="a">
<form method="POST" action="mail1.php">
    <div class="form1">
Name:<br>
<input type="text" placeholder="Name" name="name" required class="form2" ><br>
</div>
<div class="form1">
Registration Number:<br>
<input type="text" placeholder="Registration Number" name="registration" class="form2"required><br>
</div>
<div class="form1">
Email Id:<br>
<input type="email" placeholder="Email" class="form2" name="email" required><br>
</div>
<div class="form1">
Phone Number:<br>
<input type="tel" placeholder="Phone Number" class="form2" name="phone" required><br>
</div>
<div class="form1">
Date Of Birth:<br>
<input type="date" placeholder="Date of birth" class="form2" name="dob" required><br>
</div>
<div class="form1">
<input type="checkbox" placeholder="enter your Name" class="form3" required>
Do you wish to receive further communication from us?<br>
</div>
<input type="submit" value="submit" name="submit" class="form1" id="l">
</form>
</div>
</body>
</html>