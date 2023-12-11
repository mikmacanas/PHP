<?php
$mysqli = new mysqli("localhost", "root", "", "student_information_system");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$dateOfBirth = $_POST['date_of_birth'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "INSERT INTO Student (first_name, last_name, date_of_birth, email, phone) VALUES (?, ?, ?, ?, ?)";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("ssss", $firstName, $lastName, $dateOfBirth, $email, $phone);

if ($stmt->execute()) {
    echo "New student created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$stmt->close();
$mysqli->close();
?>