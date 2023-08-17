<?php

$conn= mysqli_connect("localhost","root","","registration");
if(isset($_POST["sub"]))
{
    $N= $_POST['Name'];
$C = $_POST['Contact'];
$E = $_POST['Email'];
$A = $_POST['Address'];
$P= $_POST['Psw'];
$R = $_POST['Repsw'];
$G = $_POST['Gender'];
$sql="insert into student(name,contact,email,addr,pass,repass,gen) values('$N',$C,'$E','$A','$P','$R','$G')";

if(mysqli_query($conn,$sql))
{
    header("location:login.html");
}
else
{
    echo "not ok";
    echo mysql_error($conn);
}
}
?>
