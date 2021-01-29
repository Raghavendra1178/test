<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vit";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn) {
     //echo "connection ok";
} else {
    echo "connection failed" . mysqli_connect_error();
}


?>

<html>

<head>
    <title>Login form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
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
        background-image:linear-gradient(15deg, #82f772 0%, #5c6bf1ce 100%);
        height: 55px;
    }

    #a {
        background-color: lightblue;
        position: relative;
        bottom: 0px;
        height: 65px;
        font-family: cursive;
        font-size: 25px;
    }
    #b{
        font-weight: bold;
        font-size:20px;
    }
    #k{
        position:relative;
        right:400px;
    }
    .vl {
        top:90px;
        position:absolute;
        left:300px;

        border-left: 6px solid lightgreen;
 
  height: 350px;
}
.ol {
        top:90px;
        position:absolute;
        right
        :300px;

        border-right: 6px solid lightgreen;
 
  height: 350px;
}
</style>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-custom">
        <a href="#" class="navbar-brand">Vellore Institute Of Techonology</a>
        <div class="collapse navbar-collapse">
            <ul  id="k" class="navbar-nav ml-auto">
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
    <div id="f">
        <form action="signin.php" method="POST" style="width:800px; height:610px; margin:auto; position:relative; top:50px;" class="main-form needs-validation">
            <div class="form-group">Register Number<input type="text" name="user" value="<?php if (isset($_POST['user'])) {
                                                                                        echo $_POST['user'];
                                                                                    } ?>" placeholder="enter Register Number" class="form-control" required><br></div>
            <div class="form-group">Password<input type="password" value="<?php if (isset($_POST['password'])) {
                                                                                echo $_POST['password'];
                                                                            } ?>" name="password" placeholder="enter password" class="form-control" required><br></div>
            <div class="form-group"><input type="submit" value="Login" name="submit" class="btn btn-primary" id="sub"></div>
            <div id="b">Don't have an account?click <span><a href="register.php">here</a></span></div>
        </form>
    </div>
</body>

<div class="ol"></div>


</html>

<?php




if (isset($_POST['submit'])) {
   $uid = $_POST['user'];
    $password = $_POST['password'];
    /*   $query="insert into signin values('$uid','$password')";
    $data=mysqli_query($conn,$query);
    if($data)
    {
        echo "success";
    }
    else{
        echo "unavle to connect";
    } */

   $query = "select  registernumber && password from register where registernumber='$uid' && password='$password' ";
    $result = mysqli_query($conn, $query);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        echo "registed user";
        $query = "insert into signin values('$uid','$password')";
        $data = mysqli_query($conn, $query);
    } else {
        echo "invalid data";
    }
}
?>