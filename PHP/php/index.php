<?php 
   function dislay_image_list($imagelisst)
   {
    foreach ($imageList as $item)
    {
        echo "<img src='images/$item' width = 50px height =50px alt='$item'>";
 
    }
   }
   $items = array('item1.jpg', 'item2.jpg', 'item3.jpg', 'item4.jpg');
   dislay_image_list($items);
   
?>
<h1>function</h1>
<?php
     $items = array('item5.png', 'item6.png');
     dislay_image_list($items);
?>