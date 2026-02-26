<?php
session_start();

$email = $_POST["email"];
$pword = $_POST["pword"];

$conn = mysqli_connect("localhost", "root", "12345", "test");
if(!$conn){
    die("Connnection failed: " . mysqli_connect_error());
    exit;
}
$sql = "select * from user_info where email='$email' and pword='$pword'";
$res = mysqli_query($conn , $sql);
if(mysqli_num_rows($res) > 0){
    $_SESSION["user"] = $email;
    header("Location: welcome.php");
    exit();
} else {
    echo "Invalid Login";
}
?>