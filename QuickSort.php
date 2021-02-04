<?php

namespace A3ED2;
$csv_file = file('teste.csv');

$array_csv= array_map('str_getcsv',$csv_file);

include ("Utilidade.php");

$comp=0;
$troca=0;

function partition(&$vec, $inicio,$fim,&$comp,&$troca){
    //toma o primeiro elemento como pivô, coloca elementos maiores que o pivô --
    //-- à sua direita e menores à esquerda
    //i = o menor entre os maiores elementos do vetor (transformar em comp de letras depois)
    //inicio = menor posição do vetor (normalmente zero)
    //fim =  maior posição do vetor, dada por sizeof(vec[])/ sizeof(vec[0])


    $piv = $vec[$inicio];
    $p1 = $inicio + 1;

    for ($i=$inicio; $i <$fim ; $i++) {
        $comp++;
        if (strcmp($vec[$i][0],$piv[0])<0){

            swap($vec[$p1],$vec[$i]);
            $p1++;
            $troca++;


        }
    }

    $vec[$inicio]=$vec[$p1-1];
    $vec[$p1-1]=$piv;


    
    return ($p1-1);


}

//QUICK SORT VERDADEIRO

function QuickSort1(&$vec,$inicio,$fim,&$comp,&$troca){

   
    if($inicio<$fim){
        $pi= partition($vec,$inicio,$fim,$comp,$troca);

        QuickSort1($vec,$inicio,$pi-1,$comp,$troca);
        QuickSort1($vec,$pi+1,$fim,$comp,$troca);
    }

}

//pra rodar o QuickSort1 (verdadeiro) e  já imprimir tudo sem repetir
function QuickSort(&$vec,$inicio,$fim,&$comp,&$troca){
    $executionStartTime=microtime(true);

    QuickSort1($vec,$inicio,$fim,$comp,$troca);

    $executionEndTime=microtime(true);
    $seconds =$executionEndTime - $executionStartTime;
    var_dump($vec);
    echo "Número de Comparações:$comp e Número de Trocas:$troca\r\n";
    echo "Tempo de execução:$seconds s\r\n";
}


QuickSort($array_csv,0,sizeof($array_csv),$comp,$troca);






?>