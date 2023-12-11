<?php
$mysqli = new mysqli("localhost", "root", "", "student_information_system");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$studentID = $_POST['student_id'];
$courseID = $_POST['course_id'];
$enrollmentDate = $_POST['enrollment_date'];

$sql = "INSERT INTO Enrollment (student_id, course_id, enrollment_date) VALUES (?, ?, ?)";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("iii", $studentID, $courseID, $enrollment_date);

if ($stmt->execute()) {
    echo "Enrollment created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$stmt->close();
$mysqli->close();
?>