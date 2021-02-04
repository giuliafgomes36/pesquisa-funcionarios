<?php

namespace A3ED2;
include ("Utilidade.php");

$csv_file = file('teste.csv');

$array_csv = array_map('str_getcsv',$csv_file);
$troca=0;
$comp=0;


function SelectionSort(&$vec,&$comp,&$troca){
    $executionStartTime = microtime(true);
    for ($i=0;$i <sizeof($vec); $i++){
        $comp++;

        for ($j=($i+1); $j <sizeof($vec); $j++){

            if(strcmp($vec[$i][0],$vec[$j][0])>0){
                swap($vec[$i],$vec[$j]);
                $troca++;
            }

        }
    }
    $executionEndTime = microtime(true);
    $seconds = $executionEndTime - $executionStartTime;
    var_dump($vec);
    echo("Número de comparações:$comp\r\n e Número de trocas:$troca\r\n");
    echo("Tempo de execução:$seconds s");
}


SelectionSort($array_csv,$comp,$troca);
