<?php
$materia = $_GET['asignatura'];
$nota_final = $_GET['nota_final'];



if ($nota_final <7) {
    echo "Reprobaste la asignatura: " .$materia;   
}else{
     echo "Aprobaste la asignatura:  " .$materia;
    }
?>
