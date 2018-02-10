<?php 
	#1. Quando o array tem apenas uma dimensão, é chamado de vetor
	#2. Quando o array tem mais de uma dimensão, é chamado de array bidemensional
	
	//exemplo de um vetor
	$frutas = array("laranja", "abacaxi", "melancia");
	print_r($frutas);

	echo "<br>";

	//exemplo de um array bidimensional/multidimensional
	$carros[0][0] = "GM";
	$carros[0][1] = "Cobalt";
	$carros[0][2] = "Onix";
	$carros[0][3] = "Camaro";

	$carros[1][0] = "Ford";
	$carros[1][1] = "Fiesta";
	$carros[1][2] = "Fusion";
	$carros[1][3] = "eco sport";

	echo $carros[1][3];

	echo "<br>";

	echo end($carros[0]);
 ?>