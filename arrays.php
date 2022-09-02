<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>Array</h2>
<?php
  $Array1=array("hola","adios");
  $Array2=array(1,0.2,3,4.5,5);
  #multidimensional array 
  $multiArray=array(
               array("hola","adios"),
               array(1,0.2,3,4.5,5)
            );
  print count($multiArray);
  $newArray= array_merge($Array1,$Array2);
 
  echo '<br>';
  $a=array("red","green");
  array_push($a,"blue","yellow");  #push new elements into the array 
  print_r($a);
?>  

    
</body>
</html>