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
if ($_GET["currency"] == "USD")
{
  echo $amount * $USD;
}
elseif ($_GET["currency"] == "EUR")
{
  echo $amount * $EUR;
}
elseif ($_GET["currency"] == "SGD")
{
  echo $amount * $SGD;
}
elseif ($_GET["currency"] == "JPY")
{
  echo $amount * $JPY;
}
  

?>
</body>

</html>