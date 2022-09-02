<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>Math Operators</h2>
<?php
  print 'hola<br>';
  $greetingName='Marta';
  print 'Hola '.$greetingName.'<br>';
  echo str_ireplace("world", "Dolly", "Hello World!");
  #Replace the text "world" with "Dolly", Case Insensitive:
  echo '<br>';
  echo str_replace("world", "Dolly", "Hello World!");
  #Replace the text "world" with "Dolly": //case sensitive
  echo str_repeat("Wow ",13);
  #repeat the strin x number of times
  echo '<br>';
  echo strlen("Hello"); #length of string
  echo '<br>';
  echo stripos("I love php, I love php too!","PHP");
  echo '<br>';
  

  #Find the position of the first occurrence of "php" i
  print  strtoupper('hola');
  echo '<br>';
  print strtolower('HOLA');
  echo '<br>';
  print substr("Hello world",6);
?>  

    
</body>
</html>