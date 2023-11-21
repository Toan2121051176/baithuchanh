<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/form.css">
  <title>CHu Thế Toàn</title>
</head>
<style>
  h1{
    color: white;
    font-size: 200px;
  }
</style>
<body style="background-color: black;">
<?php
$currency = $_GET['currency'];
echo " $amount $currency is equal";
switch ($curency)
{
  case "USD";
   echo $amount * $USD;
   break;
  case "EUR";
   echo $amount * $EUR;
   break;
  case "SGD";
   echo $amount * $SGD;
   break;
  case "JPY";
   echo $amount * $JPY;
   break;
  
}
?>
</body>

</html>