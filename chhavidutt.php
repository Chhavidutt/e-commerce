<!DOCTYPE html>
<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="e_commerce";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$name = $_POST['name'];
$phone = $_POST['phoneNo'];
$email = $_POST['email'];
$Msg = $_POST['msg'];


  $sql = "INSERT INTO msg_feedback 
  VALUES ('$name','$phone','$email','$Msg')";
  try{

  if ($conn->query($sql) === TRUE) {
    echo "<script> alert('Your message sent successfully'); window.location.replace('Chhavidutt.html'); </script> ";
  }
  }
  catch(Exception $e){
    echo "Email already exists!!";
  }


$conn->close();
?>
</body>
</html>