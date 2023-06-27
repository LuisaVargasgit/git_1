<?php
include 'punto_4.html';
if (isset($_POST ['datos'])) {
$a = 1;
$cant = $_POST['cantidad'];

//while ($a <= $cant) {
 //   echo 'Hola Mundo'.$a . '<br>';
//    $a++;
//}

//for ($a = 1;<= $cant; $a++)
// echo 'Hola Mundo'.$a . <br>;
//}

do{
    echo 'Hola Mundo'.$a . <br>;
    $a++;
    } while ($a<= $cant);
    
    }
    ?>