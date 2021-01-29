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
    <title>Achivements Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<style>
    .navbar-brand {
        color: blue;
        font-size: 25px;
        font-family: cursive;
        margin: 6px;
        position: relative;
        left: 100px;
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
        right:200px;
    }
   #j{
       position:relative;
       top:100px;
       left:300px;
       color:red;
     
   }
</style>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-custom">
        <a href="#" class="navbar-brand">Vellore Institute Of Techonology</a>
        <div class="collapse navbar-collapse">
            <ul  id="k" class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#" id="n" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" id="o" class="nav-link">Academic History</a>
                </li>
                <li class="nav-item">
                    <a href="#" id="o" class="nav-link">Achievements</a>
                </li>
                <li class="nav-item">
                    <a href="#" id="o" class="nav-link">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    
        <div id="j">
            <h2>Add Achivement</h2>

            <form action="achievements.php" method="POST" style="width:800px; height:600px; position:relative; ">
    Eventname:<input type="text" name="user" value="<?php if (isset($_POST['user'])) {
                                                        echo $_POST['user'];
                                                    } ?>" placeholder="Event Name" class="form-control" required><br>
    Rank Secured:<input type="number" name="phone" value="<?php if (isset($_POST['phone'])) {
                                                        echo $_POST['phone'];
                                                    } ?>" placeholder="Rank Secured" class="form-control" required> <br>
    Please enter feedback:<br>                                             
    <textarea roes="30" cols="50" name="description"></textarea><br><br>
    Please Upload Your Certifictae here:<br><br>
    <input type="file" ><br><br>
    <input type="submit" value="Add now" name="submit" class="btn btn-primary" id="sub"><br><br>
    
</form>

        </div>
                                            
</html>


<?php

if (isset($_POST['submit'])) {

    $user = $_POST['user'];
    $password = $_POST['phone'];
    $phone = $_POST['description'];
    

        $query = "insert into achievements values('$user','$password','$phone','12.jpeg')";
        $data = mysqli_query($conn, $query);
        if ($data) {
               echo "success";
        }
    
}

?>