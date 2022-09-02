<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Conditionals</h1>

<?php

echo "<h2>Single Condition</h2>";
$today_date=new DateTime();
if($today_date->format('l')== "Monday"){
    echo'We are on Monday';
}

if($today_date->format('F')== "October"){
    echo'We are on Monday';
}else{
    echo 'We are in '.$today_date->format('F');
}
echo "<br>";
echo "<h2>Double Condition</h2>";
echo "<br>";
$minutes= date('i'); #current minute on date functions

if($minutes< 10){
  echo 'the current minute is less than 10';
}elseif($minutes>10){
  echo'the current minute is more than 15';
}else{
    echo'Does not meet any conditions';
 }

 echo "<h2>Switch Structure</h2>";


#switch

 $favcolor = "red";

switch ($today_date->format('l')) {
  case "Monday":
    echo "Today is Monday!";
    break;
  case "Tuesday":
    echo "Today is Tuesday!";
    break;
  case "Wednesday":
    echo "Today is Wednesday!";
    break;  
  case "Thrusday":
    echo "Today is Thrusday!";
    break;  
  case "Friday":
    echo "Today is Friday";
    break;
  default:
    echo "Is weekend";
}



echo "<br>";


echo "debug<br>";
var_dump($minutes);
var_dump($today_date->format('l'));
var_dump($today_date->format('F'));
 
 


?>  

    
</body>
</html>