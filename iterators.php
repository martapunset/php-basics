<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Iterators</h1>
<h2>For loop</h2>
<?php
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}

echo "<h2>For Each loop</h2>";
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
echo "<h2>While loop</h2>";
$x = 1;
while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}



echo "<h2>Do while loop</h2>";
$y=1;
do {
    echo "The number is: $y <br>";
    $y++;
  } while ($y <= 5);

?>  

    
</body>
</html>