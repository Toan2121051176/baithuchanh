<?php 
   $items = array('1.jpg', '2.jpg', '3.jpg', '4.jpg');
   foreach($items as $item)
   {
    echo "<img src='images/$item' width = 50px height =50px alt='$item'>"
   }
?>