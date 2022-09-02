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
<h2>DateTime Object</h2>
<?php
$today_date=new DateTime();
$today_date_format=date_format($today_date, "d/m/Y");
echo $today_date_format. "<br><br>";

echo "Day: ".$today_date->format('l'). "<br>"; #objects
echo "Hour: ".date_format($today_date,'G'). "<br>"; #procedures
echo "Minute: ".date_format($today_date,'i'). "<br>";
echo "Seconds: ".date_format($today_date,'s'). "<br>";


?>  

    
</body>
</html>