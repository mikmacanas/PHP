<?php
$mysqli = new mysqli("localhost", "root", "", "student_information_system");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$courseName = $_POST['course_name'];
$courseDescription = $_POST['course_description'];

$sql = "INSERT INTO Course (course_name, course_description) VALUES (?, ?)";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("ss", $courseName, $courseDescription);

if ($stmt->execute()) {
    echo "New course created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$stmt->close();
$mysqli->close();
?>