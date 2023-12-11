<?php
$mysqli = new mysqli("localhost", "root", "", "student_information_system");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$enrollmentID = $_GET['enrollment_id'];

$sql = "SELECT * FROM Enrollment WHERE enrollment_id = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("i", $enrollmentID);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Student ID: " . $row["student_id"] . " - Course ID: " . $row["course_id"] . " - EnrollmentDate: " . $row["enrollment_date"] . "<br>";
    }
} else {
    echo "0 results";
}

$stmt->close();
$mysqli->close();
?>