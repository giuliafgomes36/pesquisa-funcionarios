<?php

//Carregar arquivo csv.
$csv_file = file('teste.csv');

//Mapear conteúdo do arquivo para variável.
$array_csv = array_map('str_getcsv', $csv_file);

$numComp = 0;
$numTrocas = 0;

function merge_sort(&$array){

	//Se o tamanho do array for igual a 1, retorna o array.
	if (count($array) == 1) return $array;

	$mid = count($array) / 2; //Indice do meio.
	
    $left = array_slice($array, 0, $mid); //Pega os valores do indice zero até o meio e armazena em left.
	$right = array_slice($array, $mid); //Pega os valores do indice mid até o final e armazena em right.
	
	$left = merge_sort($left); //Divide a parte esquerda em duas e armazena em left.
	$right = merge_sort($right); //Divide a parte direita em duas e armazena em right.

	return merge($left, $right); //Insere as partes divididas em outra função. 
}
function merge($left, $right){

    $res = array(); //indica que a variável é um array.
    
    //Enquanto o tamanho do array left e do array right for maior que zero: 
	while (count($left) > 0 && count($right) > 0){

        //Se o nome do primeiro elemento de left for maior que o nome do primeiro elemento de right:
		if(strcasecmp($left[0][0],$right[0][0])>=0){
			$res[] = $right[0];//O array res recebe o elemento menor.
			$right = array_slice($right , 1);//corta o array right do indice zero até o 1.
            
        //Caso contrário:
		}else{
			$res[] = $left[0];//O array res recebe o elemento menor.
			$left = array_slice($left, 1);//corta o array left do indice zero até o 1.
		}
    }
    
    //Enquanto o tamanho de left for maior que zero:
	while (count($left) > 0){
		$res[] = $left[0];//O array res recebe o elemento na primeira posição de left.
		$left = array_slice($left, 1);//corta o array left do indice zero até o 1
    }
    
    //Enquanto o tamanho de right for maior que zero:
	while (count($right) > 0){
		$res[] = $right[0];//O array res recebe o elemento na primeira posição de right.
		$right = array_slice($right, 1);//corta o array right do indice zero até o 1
	}
	return $res;
}

$array_csv = merge_sort($array_csv);
var_dump($array_csv);