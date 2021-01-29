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
 
$query1="select * from core";
$query_run1=mysqli_query($conn,$query1);
$rows1=mysqli_fetch_assoc($query_run1);

$pc=$rows1['programecore'];
$uc=$rows1['universitycore'];
$pe=$rows1['programeelective'];
$ue=$rows1['universityelective'];
$nc=$rows1['noncredit'];
$tc=$rows1['total'];

$query2="select * from grades";
$query_run2=mysqli_query($conn,$query2);
$rows2=mysqli_fetch_assoc($query_run2);
$reg=$rows2['register'];
$ear=$rows2['earn'];
$gpa=$rows2['cgpa'];
$s=$rows2['s'];
$a=$rows2['a'];
$b=$rows2['b'];
$c=$rows2['c']; 
$d=$rows2['d'];
$e=$rows2['e'];
$f=$rows2['f'];
$n=$rows2['n'];


?>

<html>

<head>
    <title>Academic History Page</title>
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
    
    <center><h3 style="font-style: italic;font-weight: bold;font-size: 45px;color:
green;" >Academic History</h3></center>

<table bgcolor = "FBF8B0" width="90%" border="1px solid black"
bordercolor="0B0C01" style="margin-left: 5%;" >
 <tr>
 <th style="text-align: center;background-color: white;"  >Registration
Number</th>
 <th style="text-align: center;background-color: white;" >Name</th> 
 <th style="text-align: center;background-color: white;"
>Programme</th>
 
 <th style="text-align: center;background-color: white;" >Year
Joined</th>
 <th style="text-align: center;background-color: white;" >Edu
status</th>
 <th style="text-align: center;background-color: white;" >School</th>
 <th style="text-align: center;background-color: white;" >Campus</th>
 </tr>
 <tr>

 ?>
 <th style="text-align: center;">19BCE1178</th>
 <th style="text-align: center;">Raghavendra</th>
 <th style="text-align: center;">B.Tech. - Computer Science and
Engineering</th>
 
 <th style="text-align: center;">2019</th>
 <th style="text-align: center;">Admitted</th>
 <th style="text-align: center;">SCOPE</th>
 <th style="text-align: center;">CHENNAI</th>
 </tr>
 

</table> 
<br>
<br>

<br>
<br>
<table bgcolor = "FBF8B0" width="90%" border="1px solid black"
bordercolor="0B0C01" style="margin-left: 5%;" >
 <tr>
 <th style="text-align: center;background-color: white;"  colspan="3"
>Curriculum Details</th>
 </tr>
 <tr>
 <th style="text-align: center;background-color: white;"  >Curriculum
Distribution Type</th>
 <th style="text-align: center;background-color: white;" >Credits
Required</th>
 <th style="text-align: center;background-color: white;" >Credits
Earned</th>
 </tr>
 <tr>
 <th style="text-align: center;">Programme Core</th> 
 <th style="text-align: center;">62</th>
 <th style="text-align: center;"><?php echo $pc?></th>
 </tr>
 <tr>
 <th style="text-align: center;">University Core</th>
 <th style="text-align: center;">53</th>
 <th style="text-align: center;"><?php echo $uc?></th>
 </tr>
 <tr>
 <th style="text-align: center;">Programme Elective</th>
 <th style="text-align: center;">33</th>
 <th style="text-align: center;"><?php echo $pe?></th>
 </tr>
 <tr>
 <th style="text-align: center;">University Elective</th>
 <th style="text-align: center;">12</th>
 <th style="text-align: center;"><?php echo $ue?></th>
 </tr>
 <tr>
 <th style="text-align: center;">Non-credit Course</th>
 <th style="text-align: center;">-</th>
 <th style="text-align: center;"><?php echo $nc?></th> 
 </tr>
 <tr>
 <th style="text-align: center;">Total Credits</th>
 <th style="text-align: center;">160</th>
 <th style="text-align: center;"><?php echo $tc?></th>
 </tr>
</table>
<br>
<br>
<br>
<br>
<table bgcolor = "FBF8B0" width="90%" border="1px solid black"
bordercolor="0B0C01" style="margin-left: 5%;" >
 <tr>
 <th style="text-align: center;background-color: white;"  >Credits
Registered</th>
 <th style="text-align: center;background-color: white;" >Credits
Earned</th>
 <th style="text-align: center;background-color: white;" >CGPA</th>
 <th style="text-align: center;background-color: white;" >S
Grades</th>
 <th style="text-align: center;background-color: white;" >A
Grades</th>
 <th style="text-align: center;background-color: white;" >B
Grades</th>
 <th style="text-align: center;background-color: white;" >C
Grades</th>
 <th style="text-align: center;background-color: white;" >D
Grades</th>
 <th style="text-align: center;background-color: white;" >E
Grades</th>
 <th style="text-align: center;background-color: white;" >F
Grades</th>
 <th style="text-align: center;background-color: white;" >N
Grades</th>

 </tr>
 <tr> 
 <th style="text-align: center;"><?php echo $reg;?></th>
 <th style="text-align: center;"><?php echo $ear;?></th>
 <th style="text-align: center;"><?php echo $gpa;?></th>
 <th style="text-align: center;"><?php echo $s;?></th>
 <th style="text-align: center;"><?php echo $a;?></th>
 <th style="text-align: center;"><?php echo $b;?></th>
 <th style="text-align: center;"><?php echo $c;?></th>
 <th style="text-align: center;"><?php echo $d;?></th>
 <th style="text-align: center;"><?php echo $e;?></th>
 <th style="text-align: center;"><?php echo $f;?></th>
 <th style="text-align: center;"><?php echo $n;?></th>

 </tr>
</table>
<br>
<br>
</body> 
                                            
</html>
