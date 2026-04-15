<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Leap Year </h1>
    <?php 
    $x= 1700;
    if($x%4==0 && $x%100!=0){
        echo "Leap Year";
    }
    elseif($x%400==0){
        echo "Leap Year";
    }
    else{
        echo "Not a Leap Year";
    }
    ?>
</body>
</html>