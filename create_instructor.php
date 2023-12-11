<?php
$mysqli = new mysqli("localhost", "root", "", "student_information_system");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$instructorFirstName = $_POST['instructor_first_name'];
$instructorLastName = $_POST['instructor_last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "INSERT INTO Instructor (instructor_first_name, instructor_last_name, email, phone) VALUES (?, ?, ?, ?)";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("ss", $instructorFirstName, $instructorLastName, $email, $phone);

if ($stmt->execute()) {
    echo "New instructor added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$stmt->close();
$mysqli->close();
?>