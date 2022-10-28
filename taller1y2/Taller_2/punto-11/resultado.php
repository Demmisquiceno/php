<?php
$Dinero_total = $_POST['valor1'];

$total_ganancia = $Dinero_total * 0.15;
$ganancia = $total_ganancia + $Dinero_total;
if ($total_ganancia) {
echo "si deseas ganar el 15% lo debes de vender en: ".$ganancia;
}
?>