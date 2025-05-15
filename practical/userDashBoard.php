<?php
session_start();
if ($_SESSION['role'] != 'Customer') {
    header("Location: loginpage.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>User Dashboard</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: Arial, sans-serif;
      background: #e0e0e0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      width: 350px;
      text-align: center;
    }

    h2 {
      margin-bottom: 20px;
      color: #333;
    }

    .info {
      margin: 10px 0;
      font-size: 16px;
      color: #555;
    }

    .label {
      font-weight: bold;
      color: #333;
    }

    button {
      margin-top: 20px;
      width: 100%;
      padding: 10px;
      background: #f44336;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    button:hover {
      background: #d32f2f;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>User Dashboard</h2>
    <div class="info"><span class="label">Full Name:</span> <?php echo $_SESSION['userFullName']; ?></div>
    <div class="info"><span class="label">Gender:</span> <?php echo $_SESSION['gender']; ?></div>
    <div class="info"><span class="label">Address:</span> <?php echo $_SESSION['address']; ?></div>
    <div class="info"><span class="label">Role:</span> Customer</div>
    <form action="logout.php" method="post">
      <button type="submit">Logout</button>
    </form>
  </div>
</body>
</html>