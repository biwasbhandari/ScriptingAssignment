<?php
// Set a cookie
setcookie("username", "John", time() + 3600, "/"); // expires after 1 hour
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Example</title>
</head>
<body>

<?php
// Retrieve cookie value
if(isset($_COOKIE["username"])) {
    echo "Welcome " . $_COOKIE["username"] . "! Your cookie is set.";
} else {
    echo "Cookie is not set!";
}
?>

</body>
</html>

<?php
// Start the session
session_start();

// Set session variables
$_SESSION["username"] = "John";
$_SESSION["email"] = "john@example.com";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Example</title>
</head>
<body>

<?php
// Retrieve session values
if(isset($_SESSION["username"])) {
    echo "Welcome " . $_SESSION["username"] . "! Your session is set.";
} else {
    echo "Session is not set!";
}
?>

</body>
</html>
