<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


// Kama user haja-login, mrudishe kwenye login page
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: /student_feedback_System/login.php");
    exit;
}
?>
