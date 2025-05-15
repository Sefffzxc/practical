<?php
session_start();
include "conn.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    $_SESSION['userFullName'] = $user['first_name'] . " " . $user['last_name'];
    $_SESSION['gender'] = $user['gender'];
    $_SESSION['address'] = $user['address'];
    $_SESSION['role'] = $user['role'];
    
    if ($user['role'] == 'Admin') {
        header("Location: adminDashBoard.php");
    } else {
        header("Location: userDashBoard.php");
    }
} else {
    echo "Invalid login.";
}
?>
