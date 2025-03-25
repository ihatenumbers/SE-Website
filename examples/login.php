<?php
include("cn.php");
session_start();

// Redirect if already logged in
if (isset($_SESSION['user_id'])) {
    header("Location: home.php");
    exit();
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $hashed_password = md5($password); // Assuming passwords are hashed with MD5

    // Query tbl_users for authentication
    $query = "SELECT * FROM tbl_users WHERE user_id = '$user_id' AND password = '$hashed_password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['account_type'] = $user['account_type'];
        header("Location: home.php");
        exit();
    } else {
        $error = "<p style='color: red; text-align: center;'>Invalid User ID or Password</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Student Portal</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Login</h2>
            <?php if (isset($error)) echo $error; ?>
            <form action="" method="POST">
                <label for="user_id">User ID / Student No.</label>
                <input type="text" id="user_id" name="user_id" placeholder="Enter User ID or Student No." required>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter Password" required>
                <button type="submit" class="save-btn">Login</button>
            </form>
        </div>
    </div>
</body>
</html>