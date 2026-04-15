<!DOCTYPE html>
<html>
<body>

<h2>The strrev() Function</h2>

<?php
$x = 123;  //321
$rev=0;
while((int)$x>0){
    $rem=$x%10;
    $rev=$rev*10+$rem;
    $x=$x/10;

}
echo $rev;
?> 
 
</body>
</html>
