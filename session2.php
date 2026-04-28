<?php
// Start the session at the very top of the script
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables using quotes for keys and values
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";

// Output confirmation
echo "Session variables are set.";
?>

</body>
</html>
