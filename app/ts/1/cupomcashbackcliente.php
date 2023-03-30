<?php
// Inicio
$log_datahora_ini = date("dmYHis");
$acao="cupomcashbackcliente"; 
$arqlog = defineCaminhoLog()."apilebes_clientes_".date("dmY").".log";
$arquivo = fopen($arqlog,"a");
fwrite($arquivo,$log_datahora_ini."$acao"."-ENTRADA->".json_encode($jsonEntrada)."\n");   

$JSON = '{
    "conteudoSaida": {
        "cliente": [
            {
                "codigoCliente": 1513,
                "cpfCNPJ": "51555330150",
                "nomeCliente": "CLIENTE TESTE TI LEBES"
            }
        ],
        "cupom": [
            {
                "codigoCliente": 1513,
                "idCupom": 94,
                "dataGeracao": "2023-03-28",
                "dataValidade": "2023-04-27",
                "valorCupom": 99.42,
                "percCupom": 0,
                "dataUtilizacao": null
            },
            {
                "codigoCliente": 1513,
                "idCupom": 108,
                "dataGeracao": "2023-03-28",
                "dataValidade": null,
                "valorCupom": 0,
                "percCupom": 0,
                "dataUtilizacao": null
            },
            {
                "codigoCliente": 1513,
                "idCupom": 116,
                "dataGeracao": "2023-03-28",
                "dataValidade": "2023-04-27",
                "valorCupom": 99.42,
                "percCupom": 0,
                "dataUtilizacao": null
            },
            {
                "codigoCliente": 1513,
                "idCupom": 124,
                "dataGeracao": "2023-03-28",
                "dataValidade": "2023-04-27",
                "valorCupom": 99.42,
                "percCupom": 0,
                "dataUtilizacao": null
            },
            {
                "codigoCliente": 1513,
                "idCupom": 132,
                "dataGeracao": "2023-03-28",
                "dataValidade": "2023-04-27",
                "valorCupom": 99.42,
                "percCupom": 0,
                "dataUtilizacao": null
            }
        ]
    }
}';

$jsonSaida = json_decode($JSON,TRUE);




?>