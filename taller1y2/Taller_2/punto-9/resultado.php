<?php
$nota1 =$_POST['nota1'];
$nota2 =$_POST['nota2'];
$nota3 =$_POST['nota3'];

$examen1= 0.3 ;
$examen2= 0.3 ;
$examen3= 0.4;

$promedio1 = $nota1 * $examen1;
$promedio2 = $nota2 * $examen2;
$promedio3 = $nota3 * $examen3;
$nota_final = $promedio1  +$promedio2  + $promedio3  ;

if ($nota_final >= 4.0 ) {
    echo "Aprobaste con una nota de:  ".$nota_final;
}else{
    echo "Desaprobaste con una nota de:  ".$nota_final;    
}
?>

