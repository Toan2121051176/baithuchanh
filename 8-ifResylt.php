<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <litle>CHu Thế Toàn </litle>
    </head>
    <body>
       <?php
            echo "The Game";
            if ($_GET["response"] == "yes")
            {
                echo "HAS BEEN QUITED";
            }
            if ($_GET["response"] == "no")
            {
                echo "WILL BE CONTINUED IN 3 SECONDS";
            } 
            echo "<br> AFTER IF STATEMENT";
        ?>
    </body>
</html>