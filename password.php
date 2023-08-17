<?php
session_start();
$_SESSION["userId"] = "1";
$conn = mysqli_connect("localhost", "root", "", "registration") or die("Connection Error: " . mysqli_error($conn));

if (count($_POST) > 0) {
    $result = mysqli_query($conn, "SELECT * from admin WHERE aname='" . $_SESSION["userId"] . "'");
    $row = mysqli_fetch_array($result);
    if ($_POST["currentPassword"] == $row["password"]) {
        mysqli_query($conn, "UPDATE users set password='" . $_POST["newPassword"] . "' WHERE userId='" . $_SESSION["userId"] . "'");
        $message = "Password Changed";
    } else
        $message = "Current Password is not correct";
}
?>
<?php
session_start();
$_SESSION["email"] = "1";
$conn = mysqli_connect("localhost", "root", "", "registration") or die("Connection Error: " . mysqli_error($conn));

if (count($_POST) > 0) {
    $result = mysqli_query($conn, "SELECT *from admin WHERE email='" . $_SESSION["email"] . "'");
    $row = mysqli_fetch_array($result);
    
    if ($_POST["currentPassword"] == $row["pass"]) {
        mysqli_query($conn, "UPDATE admin set password='" . $_POST["newPassword"] . "' WHERE email='" . $_SESSION["email"] . "'");
        $message = "Password Changed";
    } else
        $message = "Current Password is not correct";
}
?>