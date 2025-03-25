<?php
session_start();
include("cn.php");

// Ensure we return JSON
header('Content-Type: application/json');

try {
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        throw new Exception('Invalid request method');
    }

    if (!isset($_POST['user_id']) || !isset($_POST['password'])) {
        throw new Exception('Missing required fields');
    }

    $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $hashed_password = md5($password);

    $query = "SELECT * FROM tbl_users WHERE user_id = '$user_id' AND password = '$hashed_password'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        throw new Exception('Database error: ' . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['account_type'] = $user['account_type'];
        $_SESSION['logged_in'] = true;
        $_SESSION['last_activity'] = time();
        
        echo json_encode([
            'success' => true, 
            'redirect' => 'index.php'
        ]);
        exit();
    } else {
        throw new Exception('Invalid credentials');
    }
} catch (Exception $e) {
    echo json_encode([
        'success' => false,
        'message' => $e->getMessage()
    ]);
    exit();
}
?>
