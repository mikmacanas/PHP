<?php
$mysqli = new mysqli("localhost", "root", "", "student_information_system");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$courseID = $_GET['course_id'];

$sql = "SELECT * FROM Course WHERE course_id = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("i", $courseID);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Course Name: " . $row["course_name"] . " - Description: " . $row["course_description"] . "<br>";
    }
} else {
    echo "0 results";
}

$stmt->close();
$mysqli->close();
?>