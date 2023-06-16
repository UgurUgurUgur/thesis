<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page or handle unauthorized access
    header('Location: login.php');
    exit;
}

// Generate a unique shareable link for the "Task Tracker Pro" app
$shareableLink = generateShareableLink();

// Save the shareable link in your database or any storage mechanism
// Associate the link with the specific user or app details

// Display the shareable link to the user
echo "Shareable Link: <a href=\"" . $shareableLink . "\">" . $shareableLink . "</a>";

function generateShareableLink() {
    // Generate a unique shareable link using any desired algorithm or library
    // Here's an example using a combination of the current timestamp and a random string
    $timestamp = time();
    $randomString = generateRandomString(10);
    $shareableLink = "http://yourdomain.com/task_tracker_pro.php?timestamp=" . $timestamp . "&random=" . $randomString;
    return $shareableLink;
}

function generateRandomString($length) {
    // Generate a random string of the specified length
    // Here's an example using a combination of characters
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomIndex = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$randomIndex];
    }
    return $randomString;
}
?>
