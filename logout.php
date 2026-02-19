<?php
session_start();
session_unset();
session_destroy();
header("Location: /Student_Feedback_System/index.php");
exit;
?>
