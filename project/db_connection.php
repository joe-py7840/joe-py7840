<?php
$db_connection = mysqli_connect("localhost","root","","verify_user");
// Check connection
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>