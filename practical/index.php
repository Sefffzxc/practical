<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Register</title>
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
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
      width: 320px;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    input, select {
      width: 100%;
      padding: 12px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 14px;
    }

    button {
      width: 100%;
      padding: 12px;
      background: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      transition: background 0.3s ease;
    }

    button:hover {
      background: #45a049;
    }

    .link {
      text-align: center;
      margin-top: 15px;
    }

    .link a {
      text-decoration: none;
      color: #4CAF50;
      font-weight: bold;
    }

    .link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Register</h2>
    <form action="register.php" method="post">
      <input type="text" name="fname" placeholder="First Name" required />
      <input type="text" name="lname" placeholder="Last Name" required />
      <select name="gender" required>
        <option value="" disabled selected>Select Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
      </select>
      <input type="text" name="address" placeholder="Address" required />
      <input type="number" name="age" placeholder="Age" required />
      <input type="text" name="username" placeholder="Username" required />
      <input type="password" name="password" placeholder="Password" required />
      <button type="submit">Sign Up</button>
    </form>
    <div class="link">
      Already registered? <a href="loginpage.php">Login here</a>
    </div>
  </div>
</body>
</html>