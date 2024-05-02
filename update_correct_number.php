<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $correctNumber = $_POST['correctNumber'];
    
    // Update correct number in attendance.php
    $attendanceContent = file_get_contents("attendance.php");
    $attendanceContent = preg_replace('/\$correctNumber = \d+;/', '$correctNumber = ' . $correctNumber . ';', $attendanceContent);
    file_put_contents("attendance.php", $attendanceContent);
    
    // Redirect back to admin interface
    header("Location: admin_interface.php?success=true");
    exit();
}
?>
