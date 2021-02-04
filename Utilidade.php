<?php

function imprime($vec,$fim){
    //supostamente imprime um vetor, não testei com matriz

    for ($i=0; $i <= $fim ; $i++) { 
        for ($j=0; $j <=5 ; $j++) { 
            echo($vec[$i][$j].', ');
        }
    }
}

function swap(&$a,&$b){
    //troca elementos de lugar

    $aux= $b;
    $b = $a;
    $a = $aux;
}