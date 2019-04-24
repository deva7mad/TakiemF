<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "takiem";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
   $conn->set_charset("utf8");
    if(isset($_POST['submit'])){
        $username = $conn->real_escape_string($_POST['username']);
        $email = $conn->real_escape_string($_POST['email']);
        $phone = $_POST['phone'];
        $password = md5($_POST['password']);
        $sql = "INSERT INTO teacher (Name,Email,Password,Phone) VALUES ('$username','$email','$password','$phone');";
      // echo $username;
      if ($conn->query($sql) === TRUE) {

        //echo "New record created successfully";
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal("تم تسجيل حسابكم بنجاح", "فضلا اتبع الرابط المرسل على بريدك الالكترونى لتفعيل حسابك", "success");';
        echo '}, 250);</script>';

        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
}
//mysqli_set_charset($conn,"utf8");
$conn->close();



?>