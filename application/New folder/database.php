<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "teacher";

$table = "ta";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
else{
    //if($_POST['password'] == $_POST['confirmpassword']){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = md5($_POST['password']);
        $sql = "INSERT INTO data (Name,Email,Password,Phone)"
        ."VALUES ('$username','$email','$password','$phone');";

    //}
}

?>