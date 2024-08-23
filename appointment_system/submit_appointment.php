<?php
$servername = "localhost";
$username = "root"; // your MySQL username
$password = ""; // your MySQL password
$dbname = "appointment_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$studentName = $_POST['studentName'];
$teacherName = $_POST['teacherName'];
$appointmentDate = $_POST['appointmentDate'];

$sql = "INSERT INTO appointments (student_name, teacher_name, appointment_date)
        VALUES ('$studentName', '$teacherName', '$appointmentDate')";

if ($conn->query($sql) === TRUE) {
    echo "Appointment booked successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>