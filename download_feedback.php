<?php
// Connect to database
$host = "localhost";
$username = "root";
$password = "";
$database = "student_feedback";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Headers za kudownload CSV
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=student_feedback.csv');

// Fungua output stream
$output = fopen('php://output', 'w');

// columns zilingane na DB //
fputcsv($output, array(
    'ID', 'Gender', 'Class', 'Rating',
    'Feeling', 'Sad Reason', 'Join Again', 'No Join Reason',
    'Enjoy Session', 'Enjoyed Parts', 'Not Enjoy Reason',
    'Usage Frequency', 'Home Tools', 'Home Usage', 'Favourite Subject',
    'Comfort Level', 'Comfort Reason',
    'Teachers Support', 'Parents Support', 'Helpfulness',
    'Additional Share', 'Extra Thoughts',
    'Feedback', 'Submitted At'
));

// Fetch data kutoka DB
$result = $conn->query("SELECT * FROM feedback ORDER BY submitted_at DESC");

while ($row = $result->fetch_assoc()) {
    fputcsv($output, $row);
}

fclose($output);
$conn->close();
?>
