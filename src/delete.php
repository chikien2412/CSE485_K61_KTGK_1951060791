<?php
$id = $_GET['id'];
echo $id;

//?mở kết nối
include './config.php';

//? set câu lệnh truy vấn
$sql = "DELETE FROM exams WHERE id='$id'";

//? kiểm tra và thực thi câu lệnh
if (mysqli_query($conn, $sql)) {
    header('location:./full_index.php');
} else {
    header('location:error.php');
}

//? đóng kết nối
mysqli_close($conn);


