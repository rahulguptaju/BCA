<!DOCTYPE html>
<html>
<body>

<h2>The strrev() Function</h2>

<?php
function palindrome($x){
      //321
$temp=$x; //123
$rev=0;
while((int)$x>0){
    $rem=$x%10;
    $rev=$rev*10+$rem;
    $x=$x/10;

}
if ($temp==$rev){
    echo "Palindrome";
}
else{
    echo "Not a Palindrome";
}
}
$y = 11233211;
palindrome($y);
?> 
 
</body>
</html>
