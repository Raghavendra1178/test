<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vit";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn) {
    // echo "connection ok";
} else {
    echo "connection failed" . mysqli_connect_error();
}

?>

<html>

<head>
    <title>
        Registration form
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
    .navbar-brand {
        color: blue;
        font-size: 25px;
        font-family: cursive;
        margin: 6px;
        position: relative;
        left: 200px;
    }

    #n,#o{
      
        font-size: 20px;
        font-family: cursive;
        color: white;

    }
    

    .bg-custom {
        background-image: linear-gradient(15deg, #82f772 0%, #5c6bf1ce 100%);
        height: 55px;
    }

    #a {
        background-image: linear-gradient(15deg, #82f772 0%, #5c6bf1ce 100%);
        position: relative;
        bottom: 0px;
        height: 65px;
        font-family: cursive;
        font-size: 25px;
    }
    #e{
        font-weight: bold;
        font-size:20px;
    }
    #k{
        position:relative;
        right:400px;
    }
    .vl {
        top:100px;
        position:absolute;
        left:300px;

        border-left: 6px solid lightgreen;
 
  height: 450px;
}
.ol {
        top:100px;
        position:absolute;
        right
        :300px;

        border-right: 6px solid lightgreen;
 
  height: 450px;
}
</style>
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-custom">
    <a href="#" class="navbar-brand">Vellore Institute Of Techonology</a>
    <div class="collapse navbar-collapse">
        <ul id="k" class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="#" id="n" class="nav-link">Login</a>
            </li>
            <li class="nav-item">
                <a href="#" id="o" class="nav-link">Logout</a>
            </li>
        </ul>
    </div>
    <div class="vl"></div>
</nav>


<form action="register.php" method="POST" style="width:800px; height:620px; position:relative; top:60px; margin:auto">
    Username:<input type="text" name="user" value="<?php if (isset($_POST['user'])) {
                                                        echo $_POST['user'];
                                                    } ?>" placeholder="enter Name" class="form-control" required><br>
    Register Number:<input type="text" name="phone" value="<?php if (isset($_POST['phone'])) {
                                                        echo $_POST['phone'];
                                                    } ?>" placeholder="enter Register Number" class="form-control" required> <br>
                                                   
    Password:<input type="password" name="password" value="<?php if (isset($_POST['password'])) {
                                                                echo $_POST['password'];
                                                            } ?>" placeholder="enter username" class="form-control" required><br>
    Confirm Password:<input type="password" name="email" value="<?php if (isset($_POST['email'])) {
                                                        echo $_POST['email'];
                                                    } ?>" placeholder="enter your email" class="form-control" required><br>
    <input type="submit" value="submit now" name="submit" class="btn btn-primary" id="sub"><br><br>
    <div id="e">Already have an account click <span><a href="signin.php">Here</a></span></div>
</form>
<div class="ol"></div>


</html>

<?php

if (isset($_POST['submit'])) {

    $user = $_POST['user'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $que = "select * from register where name='$user' && password='$password' ";

    $result = mysqli_query($conn, $que);
    $num = mysqli_num_rows($result);

    if ($num == 1) {
        echo "duplicate entry";
    } else {
        $query = "insert into register values('$user','$phone','$password','$email')";
        $data = mysqli_query($conn, $query);
        if ($data) {
               echo "success";
        }
    }
}

?>