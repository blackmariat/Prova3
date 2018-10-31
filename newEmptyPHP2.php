<?php
$matriz = array
    (
    array(1, 2, 3),
    array(5, 6, 7)
    
);
$matriza = array
    (
    array(1, 2, 3),
    array(5, 6, 7)
    
);
$matrizb = array
    (
    array(1, 2, 3),
    array(5, 6, 7)
    
);


function GeraTabela($resultado) {
    $numeroDeLinhas = count($resultado);
    $numeroDeColunas = count($resultado[0]);
    echo "<table border=1>
                   <table border=1>";
    //primeiro for linha por linha sempre
    for ($i = 0; $i < $numeroDeLinhas; $i++) {
        echo "</tr>";//finaliza a outra linha
        echo "<tr>";//comecar nova linha na tabela
        for ($j = 0; $j < $numeroDeColunas; $j++) {
            echo "<td> ". $resultado[$i][$j] . "</td>";
        }
    }
    
    echo "<br>";
}

function soma($matriz1, $matriz){
    $copia= $matriz;
    $numeroDeLinhas = count($matriz);
    $numeroDeColunas = count($matriz[0]);
    
    for ($i = 0; $i < $numeroDeLinhas; $i++) {
        for ($j = 0; $j < $numeroDeColunas; $j++) {
            $copia[$i][$j] = $matriz[$i][$j] + $matriz1[$i][$j];
        }
    }
    
    return $copia;
    
    
    
}

$a = soma($matriza, $matriz);
GeraTabela($a);
?>