<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Hello I am heading</h1>

    <p style='color:red;'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis magnam quia, ea facere placeat impedit unde pariatur mollitia dolorum eum aut sunt adipisci minus dolores obcaecati fuga explicabo consequatur velit!</p>
    <?php 

    echo "Welcome to PHP! </br>";
    print "Let's learn PHP.";

$x = 10; 
$y = "20"; 
$z= $x+$y;
echo " new x + y is: ", $z," ", $x,"</br>"; 
for ($i = 0; $i < 5; $i++) {
    echo $i,"</br>";

   
}
 $colors = array("Red", "Green", "Blue");
foreach ($colors as $color) {
    echo $color,"</br>";

}

?>



</body>
</html>