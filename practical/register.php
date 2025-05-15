<?php
include "conn.php";

$username = $_POST['username'];
$password = $_POST['password'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$age = $_POST['age'];

// Default role: Customer
$role = "Customer";

$sql = "INSERT INTO users (username, password, first_name, last_name, gender, address, age, role) 
        VALUES ('$username', '$password', '$fname', '$lname', '$gender', '$address', '$age', '$role')";

if ($conn->query($sql)) {
    echo "Registration successful. <a href='loginpage.php'>Login here</a>";
} else {
    echo "Error: " . $conn->error;
}
?>