<?php
session_start();

if(!isset($_SESSION["user"])){
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            text-align: center;
            margin-top: 80px;
            background-color:antiquewhite;
        }
        h1{
            color:mediumseagreen;
        }
        a{
            color:darkblue;
        }
        a:hover{
            color: blue;
        }
    </style>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION["user"]; ?></h1>
    <a href="logout.php">Logout</a>
</body>
</html>
