<?php
$mysqli = new mysqli("localhost", "root", "", "student_information_system");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$enrollmentID = $_POST['enrollment_id'];

$sql = "DELETE FROM Enrollment WHERE enrollment_id=?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("i", $enrollmentID);

if ($stmt->execute()) {
    echo "Enrollment deleted successfully";
} else {
    echo "Error deleting record: " . $mysqli->error;
}

$stmt->close();
$mysqli->close();
?>