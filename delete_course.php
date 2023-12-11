<?php
$mysqli = new mysqli("localhost", "root", "", "student_information_system");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$courseID = $_POST['course_id'];

$sql = "DELETE FROM Course WHERE course_id=?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("i", $courseID);

if ($stmt->execute()) {
    echo "Course deleted successfully";
} else {
    echo "Error deleting record: " . $mysqli->error;
}

$stmt->close();
$mysqli->close();
?>