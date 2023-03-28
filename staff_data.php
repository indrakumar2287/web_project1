<!DOCTYPE html>
<html>
<head>
	<title>Form Data</title>
	<style type="text/css">
		.popup {
			display: none;
			position: fixed;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			background-color: #fff;
			padding: 20px;
			border: 1px solid #ccc;
			z-index: 999;
		}
		.overlay {
			display: none;
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-color: rgba(0, 0, 0, 0.5);
			z-index: 998;
		}
	</style>
</head>
<body>
<?php


$name=$_POST['name'];
$degree=$_POST['degree'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$email=$_POST['email'];



$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "school";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sqlquery = "INSERT INTO `staff_table`(`Name`, `Gender`, `Degree`, `Phone`, `Address`, `Email`) 
             VALUES ('$name','$gender','$degree','$phone','$address','$email');";
 
if ($conn->query($sqlquery) === TRUE) 
    echo "<center><h2><br>Your Details Submitted Successfully !</h2><br></center>"; 
    
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	exit();
}


?>
	<div class="overlay"></div>
	<div class="popup">
		<h2>Your Details !</h2>
		<?php echo "<br>";
        echo "Name: ". $_POST['name']."<br>Gender: ". $_POST['gender']."<br>Degree: ". $_POST['degree']."<br>Phone: ". $_POST['phone'].
		"<br>Address: ". $_POST['address']. "<br>Email: ". $_POST['email']."<br><br>";
         ?>
		 <center>
		<button onclick="closePopup()">Close</button></center>
	</div>
	<script type="text/javascript">
		function openPopup() {
			document.querySelector('.popup').style.display = 'block';
			document.querySelector('.overlay').style.display = 'block';
		}

		function closePopup() {
			document.querySelector('.popup').style.display = 'none';
			document.querySelector('.overlay').style.display = 'none';
		}
	</script>

<center>
<button onclick="openPopup()" type="submit">Tap to View </button>
</center>
</body>
</html>
