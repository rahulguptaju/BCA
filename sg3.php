<!DOCTYPE html>
<html>
<body>

<?php
$x = 10;
$y = 40;

function result() {
  $z = $GLOBALS['x'] + $GLOBALS['y'];
// global $x;

// global $y;

//  $z;
//  $z=$x+$y;
echo $z;
}

result();
// echo $z;
?>

</body>
</html>
