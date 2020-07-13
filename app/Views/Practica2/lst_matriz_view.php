<h4> MATRIZ <?php echo $num." x ".$num;  ?></h4>
<table border="3">
<?php

$tmp = 1;
   
for ($i=1; $i <= $num; $i++) { 
?><tr><?php
    for ($j=1; $j <= $num; $j++) { 
        echo "<td>".$tmp."</td>";
        $tmp++;
    }   
    ?></tr><?php
}
?>
</table>