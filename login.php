<?php
include("cn.php");
session_start();

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    exit();
}

$user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$hashed_password = md5($password);

$query = "SELECT * FROM tbl_users WHERE user_id = '$user_id' AND password = '$hashed_password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    $_SESSION['user_id'] = $user['user_id'];
    $_SESSION['account_type'] = $user['account_type'];
    $_SESSION['logged_in'] = true;
    $_SESSION['last_activity'] = time(); // Track activity time
    echo json_encode(['success' => true, 'redirect' => 'index.php']);
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid credentials']);
}
?>
