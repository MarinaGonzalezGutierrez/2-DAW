<?php
//Definir el array
$arrayValores = array(10,20,30,40,50);

//Calcular suma de los valores
$suma = array_sum($arrayValores);

//Calcular el num elementos en array
$conteo = count($arrayValores);

//Calcular la media
$media = $suma / $conteo;

//Mostrar el resultado
echo "la media es: " . $media;
// La media es: 30


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
$conteo = count($arrayValores); // Obtener el número de elementos del array
// Recorrer el array usando un bucle for
for ($i = 0; $i < $conteo; $i++) {
    $suma += $arrayValores[$i]; // Sumar cada valor
}

//Calcular la media
$media = $suma / $conteo;
//Mostrar el resultado
echo "la media es: " . $media;
// La media es: 30
?>