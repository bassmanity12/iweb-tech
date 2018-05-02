<?php

$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "Medical";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $pwd = $_POST['psw'];
$gender = $_POST['gender'];



$sql = "INSERT INTO Patients (first_name, last_name,email,age,password,gender) VALUES ('$fname', '$lname', '$email','$age','$pwd','$gender')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>




