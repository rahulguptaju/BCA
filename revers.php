<!DOCTYPE html>
<html>
<body>

<h2>The PHP Reverse</h2>

<!-- <p>Use var_dump() to verify the data type of variables:</p> -->

<?php
$x=123;
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
