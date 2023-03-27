<?php
// Inicio
// Inicio
$log_datahora_ini = date("dmYHis");
$acao="relatorios"; 
$arqlog = defineCaminhoLog()."apilebes_".$acao."_".date("dmY").".log";
$arquivo = fopen($arqlog,"a");
fwrite($arquivo,$log_datahora_ini."$acao"."-ENTRADA->".json_encode($jsonEntrada)."\n");   


    $conteudoEntrada=json_encode($jsonEntrada);
/*    
    {
        "usercod": "HELIO",
        "progcod": "rel1.p",
        "relatnom": "xpto2"
    }
*/
if (!isset($dadosEntrada["tsrelat"])) {
    $parametrosJSON = array('parametros' 
            => array($jsonEntrada["parametros"]));

    $conteudoEntrada = json_encode(
        array(
            'tsrelat' => 
            array(
                  array('usercod' =>  $jsonEntrada["usercod"], 
                        'progcod' =>  $jsonEntrada["progcod"],             
                        'relatnom' =>  $jsonEntrada["relatnom"],                                     
                        'parametros' =>  json_encode($parametrosJSON),   
                        'REMOTE_ADDR' =>  $_SERVER['REMOTE_ADDR']
                  )
            )
        )
    );
}

  //echo $conteudoEntrada;

    $progr = new chamaprogress();
    $retorno = $progr->executarprogress("ts/1/tsrelat_inserir",$conteudoEntrada);

    fwrite($arquivo,$identificacao."-PROGRESS->".json_encode($retorno)."\n");

    $jsonSaida = json_decode($retorno,true);
    $parametros = json_decode($jsonSaida["relatorios"][0]["parametros"],true);
    $jsonSaida["relatorios"][0]["parametros"] = $parametros["parametros"][0];
    $jsonSaida = $jsonSaida["relatorios"][0];

    fwrite($arquivo,$identificacao."-SAIDA->".json_encode($jsonSaida)."\n");

fclose($arquivo);
    
?>