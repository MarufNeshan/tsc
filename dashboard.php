<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if not logged in
    header("Location: login.login");
    exit();
}

// Welcome message
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
  <style>
    /* style.css */

/* General Styles */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 0;
    display: flex;
    height: 100vh;
    overflow: hidden;
}

.container {
    display: flex;
    flex: 1;
}

/* Sidebar Styles */
.sidebar {
    background-color: #2c3e50;
    color: white;
    width: 250px;
    padding: 20px;
    box-sizing: border-box;
    height: 100%;
}

.sidebar h2 {
    color: #ecf0f1;
    text-align: center;
    margin-bottom: 30px;
}

.sidebar ul {
    list-style-type: none;
    padding: 0;
}

.sidebar ul li {
    margin: 20px 0;
}

.sidebar ul li a {
    text-decoration: none;
    color: #ecf0f1;
    font-size: 18px;
    padding: 10px;
    display: block;
    transition: background-color 0.3s;
}

.sidebar ul li a:hover {
    background-color: #3498db;
    border-radius: 5px;
}

/* Main Content Styles */
.main-content {
    flex: 1;
    padding: 40px;
    box-sizing: border-box;
    background-color: white;
    height: 100%;
    overflow-y: auto;
}

h1 {
    color: #333;
    font-size: 32px;
    margin-bottom: 20px;
}

p {
    color: #666;
    font-size: 18px;
}

.stats {
    display: flex;
    justify-content: space-between;
    margin-top: 40px;
}

.stat-box {
    background-color: #ecf0f1;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 30%;
    text-align: center;
}

.stat-box h3 {
    color: #34495e;
    font-size: 22px;
    margin-bottom: 10px;
}

.stat-box p {
    font-size: 24px;
    color: #2c3e50;
    font-weight: bold;
}

/* Logout Button */
a.logout-btn {
    display: inline-block;
    background-color: #e74c3c;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    font-size: 16px;
    margin-top: 30px;
}

a.logout-btn:hover {
    background-color: #c0392b;
}

  </style>
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <h2>Dashboard</h2>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>
            <p>This is your dashboard. You can view your details and manage your settings.</p>
            <div class="stats">
                <div class="stat-box">
                    <h3>New Messages</h3>
                    <p>0</p>
                </div>
                <div class="stat-box">
                    <h3>Tasks Completed</h3>
                    <p>15</p>
                </div>
                <div class="stat-box">
                    <h3>Notifications</h3>
                    <p>3</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
