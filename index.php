<?php
session_start();
require 'db.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $stmt = $pdo->prepare("SELECT * FROM users WHERE 
    username = ? AND password = ?"); 
     $stmt->execute([$username,$password]); 

     if($stmt->rowCount() > 0) {
        $_SESSION['user'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid username or password";
     }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Login</h2>
    
    <?php if (!empty($error)) echo "<p style = 'color:red'>$error</p>"?>
    <form method= "POST">
         <!-- <label>Username:</label><br> -->
         Username: <input type="text" name="username" required><br><br>
         <!-- <label>Password:</label><br> -->
         Password: <input type="password" name="password" required><br><br>
         <button type="submit">Login</button>
</form>
</body>
</html>
