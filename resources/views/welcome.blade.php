<!DOCTYPE html>
<h1>SERIE FIBONACCI </h1>

<a class="btn btn-primary" href="/welcome" role="button">MOSTRAR LA SERIE FIBONACCI MENOR A 100000</a>
</html>
<br>
<br>
<?php

$v1 = 0;
$v2 = 1;

//Mostramos el primer número de la serie de Fibonacci
echo $v1 . '<br>';
//Realizaremos 30 sucesiones de la secuencia de Fibonacci
for ($i=0; $i < 25 ;  $i++) {

    $temp = $v1;
    $v1 = $v2;
    $v2 = $temp + $v1;

    echo $v1 . '<br>';
}
