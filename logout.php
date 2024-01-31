<?php
session_start();

// Destroy the session data
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <script>
        // Display an alert box on page load
        window.onload = function() {
            alert("Logout successful!");
            // Redirect to the login page
            window.location.href = 'login.php'; //admin login indakanam.
        };
    </script>
</head>
</html>
