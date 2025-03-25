<?php
// $conn = mysqli_connect("sql103.infinityfree.com:3306", "if0_38535408", "6xweDrPTye", "if0_38535408_ncmh_portal");
$conn = mysqli_connect("localhost", "root", "", "ncmh_portal");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($conn, "utf8mb4");
?>
