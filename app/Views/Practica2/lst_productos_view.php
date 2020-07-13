<h4> LISTA DE PRODUCTOS</h4>
<table border="3">
<tr>
<td>CODIGO</td>
<td>PRODUCTO</td>
<td>PRECIO</td>
<td>CANTIDAD</td>
<td>FECHA SALIDA</td>

</tr>
<?php

foreach ($productos as $pr){
    ?>
    
    <tr>
        <td> <?php echo $pr['id'];?></td>
        <td> <?php echo $pr['prod'];?></td>
        <td> <?php echo $pr['precio'];?></td>
        <td> <?php echo $pr['cant'];?></td>
        <td> <?php echo $pr['fecha'];?></td>
    </tr>
   
   
    <?php
}
?>
</table>