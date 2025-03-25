<?php
include("cn.php");

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("location: user.php");
    exit();
}

if (isset($_POST["user_id"])) {
    $user_id = $_POST["user_id"];
    $query = mysqli_query($conn, "SELECT * FROM tbl_users WHERE user_id='$user_id'");
    $data = mysqli_fetch_assoc($query);
    echo json_encode($data);
}
?>