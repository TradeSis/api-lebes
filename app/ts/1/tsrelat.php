<?php
// Inicio
$log_datahora_ini = date("dmYHis");
$acao="tsrelat";  
$arqlog = "/home/tsplaces/tmp/apilog/apits_".date("dmY").".log";
$arquivo = fopen($arqlog,"a");

fwrite($arquivo,$log_datahora_ini."$acao"."-ENTRADA->".json_encode($jsonEntrada)."\n");   $log_datahora_ini = date("dmYHis");

$conteudoEntrada=json_encode($jsonEntrada);



    $progr = new chamaprogress();
    $retorno = $progr->executarprogress("ts/1/tsrelat",$conteudoEntrada);

    $jsonSaida = json_decode($retorno,true);
    

    
    
    $relatorios = $jsonSaida["relatorios"];
    $i = 0;
    foreach($relatorios as $relatorio) {
        $parametros = json_decode($relatorio["parametros"],true);
        if (isset($parametros["parametros"][0])) {
            $jsonSaida["relatorios"][$i]["parametros"] = $parametros["parametros"][0];
        }
        $i = $i + 1;
    }
  //  echo json_encode($jsonSaida);

    $jsonSaida = $jsonSaida["relatorios"];

    fwrite($arquivo,$identificacao."-SAIDA->".json_encode($jsonSaida)."\n");

fclose($arquivo);
    
?>