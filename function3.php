<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
function evenodd($a) {
    if($a%2==0){
        return "Even";
    }
    else{
        return "Odd";
    }
}
echo evenodd(52);
?>

</body>
</html>