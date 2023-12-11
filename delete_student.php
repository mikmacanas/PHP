<?php
$mysqli = new mysqli("localhost", "root", "", "student_information_system");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$studentID = $_POST['student_id'];

$sql = "DELETE FROM Student WHERE student_id=?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("i", $studentID);

if ($stmt->execute()) {
    echo "Student profile deleted successfully";
} else {
    echo "Error deleting record: " . $mysqli->error;
}

$stmt->close();
$mysqli->close();
?>