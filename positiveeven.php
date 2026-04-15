<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Positive or Negative </h1>
    <?php 
    $x= 0;
    if($x>=0){
        if($x%2==0){
            echo "Positive Even";
        }
        else{
            echo "Positive odd";
        }
     

    }
    // elseif($x==0)
    // {
    //     echo "Zero";
    // }
    
    else{
        
        if($x%2==0){
            echo "Negative Even";
        }
        else{
            echo "Negative odd";
        }
    }
    ?>
</body>
</html>