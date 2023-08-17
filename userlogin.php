<?php
session_start();
$conn= mysqli_connect("localhost","root","","registration");
if(isset($_POST["sub1"]))
{
$usrid= $_POST["uname"];
$pasw= $_POST["psw"];
$sql="select * from student where email='$usrid' and pass='$pasw'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($result);
if($row>0)
{
//$_SESSION["name"]=$row[1];
header("location:userinterface.php");
}
else
{
    echo "wrong password";
}
}
?>