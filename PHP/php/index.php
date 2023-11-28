<?php 
   $items = array('item1.jpg', 'item2.jpg', 'item3.jpg', 'item4.jpg');
   foreach($items as $item)
   {
    echo "<img src='images/$item' width = 50px height =50px alt='$item'>";
   }
?>
<h1>function</h1>
<?php
     $items = array('item5.png', 'item6.png');
     foreach ($items as $item)
     {
        echo "<img src='images/$item' width = 50px height =50px alt='$item'> ";
     }