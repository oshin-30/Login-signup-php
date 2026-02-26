<?php
$email = $_GET['email']; 

$conn = mysqli_connect("localhost", "root", "12345", "test");
if(!$conn) {
    echo "DB Error";
    exit;
}

$sql = "SELECT * FROM user_info WHERE Email='$email'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    echo "Already Taken";
} else {
    echo "Available";
}
?>
