<?php
$server = "localhost";
$user = "root";
$pass = "pm638684.";

$conn = new mysqli($server, $user, $pass);

$sql = "CREATE DATABASE IF NOT EXISTS emp";
if($conn ->query($sql) === TRUE){
    echo "";
}
else{
    die("database error:" .$conn->error);
}

$conn->select_db("emp");

$table = "CREATE TABLE IF NOT EXISTS emp (
id INT(11) AUTO_INCREMENT PRIMARY KEY,
name  VARCHAR(100),
email VARCHAR(100),
phone  VARCHAR(20),
address  TEXT
)";
if ($conn->query($table) === TRUE) {
    echo "";
} else {
    echo "Table error: " . $conn->error;
}

?>  