<?php
$precio = $_POST['valor_a_pagar'];
$valor_total = $precio * 0.20;
if($valor_total > 20000){
    echo"se hizo el descuento debes pagar".$valor_total;
}else{
    echo"no se hizoo el descuento debes pagar".$precio;
}
?>