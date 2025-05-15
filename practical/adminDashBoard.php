<?php
session_start();
if ($_SESSION['role'] != 'Admin') {
    header("Location: loginpage.php");
    exit();
}
include "conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Admin Dashboard</title>
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
      padding: 50px;
      min-height: 100vh;
    }

    .container {
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      width: 700px;
    }

    h2, h3 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    th, td {
      padding: 12px;
      border: 1px solid #ccc;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }

    button {
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
    <h2>Welcome Admin: <?php echo $_SESSION['userFullName']; ?></h2>
    <h3>User List</h3>
    <table>
      <tr>
        <th>Full Name</th>
        <th>Address</th>
        <th>Gender</th>
      </tr>
      <?php
      $sql = "SELECT CONCAT(first_name, ' ', last_name) AS fullname, address, gender FROM users WHERE role='Customer'";
      $result = $conn->query($sql);
      while ($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . htmlspecialchars($row['fullname']) . "</td>";
          echo "<td>" . htmlspecialchars($row['address']) . "</td>";
          echo "<td>" . htmlspecialchars($row['gender']) . "</td>";
          echo "</tr>";
      }
      ?>
    </table>
    <form action="logout.php" method="post">
      <button type="submit">Logout</button>
    </form>
  </div>
</body>
</html>