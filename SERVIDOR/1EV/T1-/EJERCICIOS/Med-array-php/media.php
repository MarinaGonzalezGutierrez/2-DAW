<?php
//Definir el array
$arrayValores = array(10,20,30,40,50);


// Inicializar variables para la suma y el conteo
$suma = 0;
$conteo = 0;

// Recorrer el array y calcular la suma y el conteo manualmente
foreach($arrayValores as $valor){
    $suma += $valor; //sumar cada valor
    $conteo++;
}

//Calcular la media
$media = $suma / $conteo;
//Mostrar el resultado
echo "la media es: " . $media;
?>