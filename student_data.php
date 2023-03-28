<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form-Data</title>
</head>
<body>
<?php


$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$course=$_POST['course'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$email=$_POST['email'];
$password=$_POST['password'];



$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "school";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sqlquery = "INSERT INTO `admission_table`(`First Name`, `Last Name`, `Course`, `Gender`, `Phone`, `Address`, `Email`, `Password`) 
             VALUES ('$firstname','$lastname','$course','$gender','$phone','$address','$email','$password');";
 
if ($conn->query($sqlquery) === TRUE) {
    echo "<h2><br>Your Details Submitted Successfully !</h2>"; 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    exit();
}

echo'<br><br>';

?>
<center>
<button onclick="window.location.href='admissions.php';" type="submit">Tap to View Records ! </button>
</center>
</body>
</html>