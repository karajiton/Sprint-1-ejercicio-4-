<?php
$numEnteros =array (1,2,3,4,5,6,7,8,9,10);
$numPrimos = array(2,3,5,7,11,13,17,19,23,29,31);
$interseccion = array();
$mezcla= array();
for ($i = 0; $i < count($numEnteros);$i++){
    for($j = 0; $j < count($numPrimos); $j++){
        if($numEnteros[$i] == $numPrimos[$j]){
            $interseccion[] = $numEnteros[$i];
        }
    }
}

function mezclarConDuplicado(array $array, array $numeros) :array{
    for ($i = 0; $i < count($numeros);$i++){
        $array[] = $numeros[$i];}
        return $array;
    
}


function mezclarSinDuplicado($array, $mezcla) : array {
    foreach ($array as $elemento) {
        if (!in_array($elemento, $mezcla)) {
            $mezcla[] = $elemento;
        }
    }
    return $mezcla;
}
    
// interseccion
print_r ($interseccion);
echo  "<br/>";
// Mezclados repetidos
$mezclaRepetida = mezclarConDuplicado($mezcla,$numEnteros);
$mezclaRepetida = mezclarConDuplicado($mezclaRepetida,$numPrimos);
print_r($mezclaRepetida);
echo  "<br/>";
// Mezclados sin repetir
$mezclaSinRepetir = mezclarSinDuplicado($numEnteros,$mezcla);
$mezclaSinRepetir = mezclarSinDuplicado($numPrimos,$mezclaSinRepetir);
print_r($mezclaSinRepetir); 
// se que lo podia hacer con las funciones de PHP y seria mucho mas sencilla y eficaz pero queria practicar el for y for each

?>