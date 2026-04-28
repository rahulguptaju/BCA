<?php
// Start the session before any HTML output
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Session Display</title>
</head>
<body>

<?php
// Echo session variables that were set on a previous page
if (isset($_SESSION["favcolor"]) && isset($_SESSION["favanimal"])) {
    echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
    echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
} else {
    echo "Session variables are not set.";
}
?>

</body>
</html>
