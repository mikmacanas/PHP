<?php
$mysqli = new mysqli("localhost", "root", "", "student_information_system");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$enrollmentID = $_POST['enrollment_id'];
$newEnrollmentDate = $_POST['new_enrollment_date'];

$sql = "UPDATE Enrollment SET enrollment_date=? WHERE enrollment_id=?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("ii", $newEnrollmentDate, $enrollmentID);

if ($stmt->execute()) {
    echo "Enrollment information updated successfully";
} else {
    echo "Error updating record: " . $mysqli->error;
}

$stmt->close();
$mysqli->close();
?>