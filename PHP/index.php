<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $amount = $_POST["amount"];
    $type = $_POST["choose-currency"];
    if ($type == "USD")
        $money = $amount * 23000;
    else if ($type == "AUD")
        $money = $amount * 17000;
    else if ($type == "JPY")
        $money = $amount * 200;
    else $money = $amount * 27000;
    echo "$amount in $type is $money in VND";
    ?>
</body>

</html>