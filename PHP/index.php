</form>
    <?php 
    if(isset($_POST['money'])&& isset($_POST['type-money'])) {
        $USD=23000;
        $EUR=27000;
        $SGP=17000;
        $JPY=120;
        $money=$_POST['money'];
        $typemoney=strtoupper($_POST['type-money']);
       if($typemoney== 'USD')
       echo $money * $USD  ;
        elseif($typemoney=='EUR')
        echo $money * $EUR ;
    elseif($typemoney== 'SGP')
    echo $money * $SGP ;
        else
        echo $money * $JPY ;


    }
    ?>