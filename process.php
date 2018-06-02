<?php 
$name = json_encode($_POST['name']);
$email = json_encode($_POST['email']);
$subject = json_encode($_POST['msg_subject']);
$message = json_encode($_POST['message']);

// echo $subject;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_shubhoday";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

echo "Connected successfully";

// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS users (
	id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	name VARCHAR(30) NOT NULL,
	email VARCHAR(50) NOT NULL,
	subject VARCHAR(30) NOT NULL,
	message VARCHAR(200),
	reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table users created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql_insert = "INSERT INTO users (name, email, subject, message)
VALUES ($name, $email, $subject, $message)";

if ($conn->query($sql_insert) === TRUE) {
    echo "Message Recorded!";
} else {
    echo "Error: " . $sql_insert . "<br>" . $conn->error;
}

$conn->close();

?>