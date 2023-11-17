<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chu Thế Toàn</title>
</head>

<body>
    <?php
    $CNTT = 18;
    $CNTT_clc = 22;
    $KHDL = 18;
    $Dia_chat = 17;
    $Moi_truong = 15;
    $pass_MT = "Moi truong";
    $pass_DC = "Dia chat";
    $pass_CNTT = "CNTT";
    $pass_KHDL = "KHDL";
    $pass_CNTT_CLC = "CNTT_CLC";

    $total = $_POST["math"] + $_POST["phy"] + $_POST["chem"];
    echo "Tong diem cua ban la $total";
    if ($total < 15)
        echo "Ban da truot het";
    elseif ($total < 17)
        echo "Ban da do vao nganh $pass_MT";
    elseif ($total < 18)
        echo "Ban da do vao nganh $pass_DC ,$pass_MT";
    elseif ($total < 22)
        echo "Ban da do vao nganh $pass_DC ,$pass_MT ,$pass_KHDL  ,$pass_CNTT";
    else echo "Ban da do vao nganh $pass_DC ,$pass_MT ,$pass_KHDL  ,$pass_CNTT, $pass_CNTT_CLC ";
    ?>
</body>

</html>