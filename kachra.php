<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "registration") or die("Connection Error: " . mysqli_error($conn));
if (isset($_POST["submit"]))
{
    $password =@$_POST["currentPassword"];
    $sql="select * from admin where pass='$password'";
    $result =mysqli_query($conn,$sql);
    $row =mysqli_fetch_row($result);

    if ($password == $row["pass"]) {
        $p =$_POST["newPassword"];
        $sql2 ="update admin set pass ='$p' where email=  .$_SESSION["email"] . ";
        if(mysqli_query($conn,$sql2)){
            echo "password changed";
        }
        else
        echo "current password is not correct";
    } 
}

if (count($_POST) > 0) {
    $result = mysqli_query($conn, "SELECT *from admin WHERE email='" . $_SESSION["email"] . "'");
    $row = mysqli_fetch_array($result);
$e =$_SESSION["pass"];
 
    
    $result1 =mysqli_query($conn,$sql);
    $row1 =@mysqli_fetch_array($result1);

}
?>
<?php

if(isset($_POST["submit"]))
{
    $conn = mysqli_connect("localhost", "root", "", "registration") or die("Connection Error: " . mysqli_error($conn));
    


}
?>