<h4>TABLA DE  MULTIPLICAR DEL <?php echo $num;  ?></h4>
<?php

for ($i=1; $i <= 10; $i++) { 
    $tmp = $num*$i;
    echo $num." x ".$i." = ".$tmp."<br>";
}
?>