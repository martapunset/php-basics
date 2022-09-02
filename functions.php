<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Functions</h1>

<?php
  function sum($a, $b) {
    return $a+$b;
  }
  function multy($a, $b) {
    return $a*$b;
  }
  function div($a, $b) {
    return $a/$b;
  }

  echo sum(2,4);
  echo "<br>";
  function calculator($a, $b,$operator) {
    if($operator=='+'){
        return $a+$b;
    }elseif($operator=='*'){
        return $a*$b;
    }elseif($operator=='/'){
        return $a/$b;
    }else
        return "operator no valid";
  }
  print calculator(2,4,'/')
?>  

    
</body>
</html>