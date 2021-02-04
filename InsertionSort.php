<?php

//Carregar arquivo csv.
$csv_file = file('teste.csv');

//Mapear conteúdo do arquivo para variável.
$array_csv = array_map('str_getcsv', $csv_file);

$numComp = 0;
$numTrocas = 0;


$executionStartTime = microtime(true);
//Insertion Sort:
function insertionSort(&$array,&$numComp,&$numTrocas) {
    
    $tam = count($array); //Função count pega o tamanho total do array

    for ($aux = 1; $aux < $tam; $aux++) {
       $chave = $array[$aux]; //Chave armazena os dados do funcionário com índice $aux.
       $nome = $array[$aux][0]; //Elemento da chave a ser comparado (nome).
       $j = $aux-1; //Índice à esquerda da chave.

       //Enquanto índice j for maior ou igual a zero e o nome for "menor" que o nome do elemento à sua esquerda:
       while ($j >= 0 && strcasecmp($nome,$array[$j][0])<=0) {
          //Posição da frente recebe cópia do valor maior 
          $array[$j + 1] = $array[$j];
          --$j;
          ++$numTrocas;
       }
       $array[$j + 1] = $chave;
       ++$numComp;
    }
    return $array;
 }
 $executionEndTime = microtime(true);
 $seconds = $executionEndTime - $executionStartTime;

$array_csv = insertionSort($array_csv,$numComp,$numTrocas);
echo "Segundos: $seconds\r\n";
echo "Número de Comparações: $numComp e Número de Trocas: $numTrocas\r\n";

var_dump($array_csv);

echo "Segundos: $seconds\r\n";
echo "Número de Comparações: $numComp e Número de Trocas: $numTrocas\r\n";