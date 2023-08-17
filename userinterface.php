<?php
session_start();
$conn= mysqli_connect("localhost","root","","registration");

$e=$_SESSION["email"];
$sql="select * from student where email='$e'";
$result=mysqli_query($conn,$sql);
$row=@mysqli_fetch_array($result);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.6.0-dist/bootstrap-4.6.0-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-4.6.0-dist/bootstrap-4.6.0-dist/js/bootstrap.min.js"> </script>
    <title>Document</title>
    <style>
    .d1{
            background-color: black;
            width: 20%;
            height: 780px;
            float: left;
            border: solid;
        }
        button:hover{
            background-color: cornsilk;
        }
        .d2{
            width: 80%;
            height: 780px;
            float: left;
            border: solid;
            text-align: center;
            background-color: honeydew;
        }
        .img1 {
            width: 20%;
            border-radius: 10%;

        }
    </style>
</head>

<body>
    <div class="d1">
        <h2 style="color: cornsilk; text-align: center; margin-top: 50px;"><b>USER</b></h2>
        <hr color="white" style="width: 100%; height: 2px;">
        <a href="userinterface.php">
        <button style="width: 100%; height: 60px;">MY PROFILE</button>
        </a>
       <a href="payment.html">
        <button style="width: 100%; height: 60px;">MAKE PAYMENT</button>
       </a>
        <a href="receipt.html">
        <button style="width: 100%; height: 60px;">RECEIPT</button></a>
        <a href="user_changepswd.php">
        <button style="width: 100%; height: 60px;">CHANGE PASSWORD</button></a>
        <a href="login.html">
        <button style="width: 100%; height: 60px;">LOGOUT</button>
        </a>
        </div>

        <div class="d2">
          <img src="img/user.jpg" class="img1">
          <p  id="p1" >user name</p>
          <br>
          <center>
         <form action="userlogin.php" method="POST">
            <table border="2px solid black" style="width: 60%;">
            <tr><td>FULL NAME</td> <td><input type="text" id="t2" value="<?php echo @$row[0]; ?>" style="width: 550px;"></td></tr>
            <tr><td>CLASS</td> <td><input type="text" id="t3"  style="width: 550px;"></td></tr>
            <tr><td>BATCH</td> <td><input type="text" id="t4" style="width: 550px;"></td></tr>
            <tr><td>SEMESTER</td> <td><input type="text" id="t5" style="width: 550px;"></td></tr>
            <tr><td>REGISTRATION NUMBER</td><td><input type="text" id="t6" style="width: 550px; height:50px;" ></td></tr>
            <tr><td>EMAIL ID</td><td><input type="text" id="t7" value="<?php echo @$row[2];?>" style="width: 550px;"></tr>
            <tr><td> D.O.B(DD/MM/YYYY)</td><td><input type="text" id="t8" style="width: 550px;"></td></tr>
            <tr><td>CONTACT NO.</td><td><input type="text" id="t9" style="width: 550px;"></td></tr>
            <tr><td>GENDER</td><td><input type="text" id="t10" value="<?php echo @$row[6];?>"  style="width: 550px;"></td></tr>
            <tr><td>FATHER'S NAME</td><td><input type="text" id="t11" style="width: 550px;"></td></tr>
            <tr><td>ADDRESS</td><td><input type="text" id="t12" value="<?php echo @$row[3];?>"  style="width: 550px;"></td></tr>
          </table>
         </form>
         </center>
            
            
        
        </div>
</body>
</html>