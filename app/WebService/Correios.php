<?php

namespace App\WebService;

class Correios {

    //CÓDIGOS DE SERVIÇOS DO CORREIO
    const SERVICO_SEDEX = "04014";
    const SERVICO_SEDEX_HOJE = "04782";
    const SERVICO_SEDEX_10 = "04790";
    const SERVICO_SEDEX_12 = "04804";
    const SERVICO_PAC = "04510";
    
    //CÓDIGOS DOS FORMATOS DE ENVIO
    const FORMATO_CAIXA_PACOTE = 1;
    const FORMATO_ROLO_PRISMA = 2;
    const FORMATO_ENVELOPE = 3;

    //código da empresa com contrato
    private $codigoEmpresa = '';

    //senha da empresa com contrato
    private $senhaEmpresa = '';

    //método responsável pela definição dos dados de contrato do webservice dos correios
    public function __construct($codigoEmpresa = '', $senhaEmpresa = '') {

        $this -> codigoEmpresa = $codigoEmpresa;
        $this -> senhaEmpresa = $senhaEmpresa;
    }

    //metódo resposavel por calcular os fretes nos correios
    public function calcularFrete($codigoServico, $cepOrigem, $cepDestino, $peso, $formato, $comprimento, $altura, $largura, $diametro = 0, $maoPropria = false, $valorDeclarado = 0, $avisoRecebimento = false) {
        echo "<pre>";
        print_r($codigoServico);
        echo "</pre>";
    }
}