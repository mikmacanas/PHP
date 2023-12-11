<?php
$mysqli = new mysqli("localhost", "root", "", "student_information_system");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$instructorID = $_POST['instructor_id'];

$sql = "DELETE FROM Instructor WHERE instructor_id=?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("i", $instructorID);

if ($stmt->execute()) {
    echo "Instructor deleted successfully";
} else {
    echo "Error deleting record: " . $mysqli->error;
}

$stmt->close();
$mysqli->close();
?>