<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$fname = $_POST["fname"];
$mail = $_POST["mail"];
$age = $_POST["age"];
$pword = $_POST["pword"];
$conn = mysqli_connect("localhost", "root", "12345", "test");
if(!$conn){
    echo "Connection failed: " . mysqli_connect_error();
    exit;
}
$sql = "insert into user_info(Name, Email, Age, Pword) values('$fname', '$mail', '$age', '$pword')";
if(mysqli_query($conn , $sql)){
    echo "Registered Succesfully.<br>";
    echo "Thank you for registering.";

    ?>
    <html>
        <head><style>
            body{
                margin: 80px;
                text-align: center;
                background-color: beige;
                font-size: larger;
            }
        </style></head>
    </html>
    <?php
} else{
    echo "Error: " . mysqli_error($conn);
}
}
?>