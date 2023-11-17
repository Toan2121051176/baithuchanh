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
$date_now = date("d");
$month_now = date("m");

if($date_now == "14" && $month_now == "11"){
  echo "<h1>DUNG</h1>";
}
else echo "<h1>SAI</h1>";

?>
</body>

</html>