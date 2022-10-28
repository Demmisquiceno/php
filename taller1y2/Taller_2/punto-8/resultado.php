<?php
$sexo = $_POST['sexo'];
$edad = $_POST['edad'];

if ($sexo=="M"){
    if($edad>=63){
        echo"usted es hombre mayor de 63 años y por lo tanto se puede jubilar";
    }else{
        echo"usted es hombre menor de 63 años y por lo tanto no se puede jubilar";
    }
}elseif ($sexo=="F"){
    if($edad>54){
        echo"usted es mujer mayor de 54  años y por lo tanto se puede jubilar";
    }else{
        echo"usted es mujer menor de 54 años y por lo tanto no se puede jubilar";
    }
}

/*profe en este me ayudo esneider */

?>