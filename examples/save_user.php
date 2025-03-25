<?php
include("cn.php");

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("location: user.php");
    exit();
}

$user_id = mysqli_real_escape_string($conn, $_POST["user_id"]);
$password = mysqli_real_escape_string($conn, $_POST["password"]);
$password = md5($password);
$account_type = mysqli_real_escape_string($conn, $_POST["account_type"]);
$status = mysqli_real_escape_string($conn, $_POST["status"]);

$check_user = mysqli_query($conn, "SELECT * FROM tbl_users WHERE user_id = '$user_id'");
$rows = mysqli_num_rows($check_user);

if ($rows == 0) {
    $sql = "INSERT INTO tbl_users (user_id, password, account_type, status) 
            VALUES ('$user_id', '$password', '$account_type', '$status')";
} else {
    $sql = "UPDATE tbl_users SET 
            password='$password', account_type='$account_type', status='$status' 
            WHERE user_id='$user_id'";
}

if (mysqli_query($conn, $sql)) {
    echo "Record saved successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>