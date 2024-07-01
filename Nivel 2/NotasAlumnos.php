<?php
$notasAlumnos = array ("Jonathan" => [2,4,8,8,7], "Maria" => [3,4,8,6,7], "Rosa" => [8,9,7,8,9], "Carlos" => [2,3,3,5,4], "Flor" => [4,5,6,5,7]);


function calcularMediaTodosAlumnos(array $notas): float{
       $media = 0.0;
       foreach ($notas as $key => $value) {
              echo "la nota media del alumno " . $key . " es: " . array_sum($value)/count($value) . "<br/>" ;
              for($i = 0; $i < count($value);$i++){
              $media += $value[$i];
              }
       }
       return  $media /= 25;
}
   
 $media = calcularMediaTodosAlumnos($notasAlumnos);      
 echo "La nota media de la calse entera es: " . $media;
?>