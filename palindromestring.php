<!DOCTYPE html>
<html>
<body>

<h2>The strrev() Function</h2>

<?php
$x = "123211";
$rev=strrev($x);

if ($x==$rev){
    echo "Palindrome";
}
else{
    echo "Not a Palindrome";
}
?> 
 
</body>
</html>
