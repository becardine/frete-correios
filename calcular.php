<?php

require __DIR__.'/vendor/autoload.php';

use \App\WebService\Correios;

//nova instancia dos correios sem contrato
$obCorreios = new Correios();

$codigoServico = Correios::SERVICO_SEDEX; 
$cepOrigem = "09010100"; 
$cepDestino = "24310430"; 
$peso = ""; 
$formato = Correios::FORMATO_CAIXA_PACOTE; 
$comprimento = ""; 
$altura = ""; 
$largura = "";
$diametro = 0; 
$maoPropria = false;
$valorDeclarado = 0;
$avisoRecebimento = false;


//executa o calculo de frete
$frete = $obCorreios->calcularFrete($codigoServico, $cepOrigem, $cepDestino, $peso, $formato, $comprimento, $altura, $largura, $diametro, $maoPropria, $valorDeclarado, $avisoRecebimento);