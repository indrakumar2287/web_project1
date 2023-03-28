<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admissions</title>
</head>
<body><center>
    <h1>Recent Admissions List !</h1>

    
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

$sqlquery = "select * from admission_table;";
 
$result = $conn->query($sqlquery);

// if ($result->num_rows > 0) {
//     // output data of each row
//     // while($row = $result->fetch_assoc()) {
//     //   echo "S.No. -   " . $row["S.No."]. " ,  Name:   " . $row["First Name"]. " " . $row["Last Name"].  
//     //    " , Course : ".$row['Course']." , Gender : ".$row['Gender']." , Mobile No. : ".$row['Phone'].
//     //    " , Email : ".$row['Email']." , Address : ".$row['Address']."<br>";
//     //    $sn= $row['S.No.'];
//     // }
//   } else {
//     echo "0 results";
//     exit();
//   }
//   $conn->close();


    ?>
    <table border=".5px" style="width:1000px; line-height:40px;">
        <thead>
            <tr>
                <th>S.No.</th>
                <th>Name</th>
                <th>Course</th>
                <th>Gender</th>
                <th>Mobile No.</th>
                <th>Email</th>
                <th>Address</th>
              </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){?>
                <tr>
                  <td><?php echo $row['S.No.']; ?></td>
                    <td><?php echo $row['First Name'].$row['Last name']; ?></td>
                    <td><?php echo $row['Course']?></td>
                    <td><?php echo $row['Gender']?></td>
                    <td><?php echo $row['Phone']?></td>
                    <td><?php echo $row['Email']?></td>
                    <td><?php echo $row['Address']?></td>
                <tr>
            <?}
            } else {
              echo "0 results";
              exit();
            }
            $conn->close();
            ?>
        </tbody>
    </table>
    </center>
</body>
</html>