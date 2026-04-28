<!DOCTYPE html>
<html>
<body>

<?php  
$x = 75;
  
function myfunction() {
  // echo $GLOBALS['x'];
  global $x;
  echo $x;
}

myfunction()
?>  

</body>
</html>
