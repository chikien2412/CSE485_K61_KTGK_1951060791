<?php
// Bước 01; Kết nối tới CSDL:
        define('HOST','localhost');
        define('USER','root');
        const PASS  = 'chikien2412';
        const DB    = 'db_test'; 
        $conn = mysqli_connect(HOST,USER, PASS,DB);
        if(!$conn){
            die('Không thể kết nối');
        }

?>