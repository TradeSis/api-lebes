<?php
// helio 22022023 - incluido crediario/cliente e crediario/contrato
// helio 17022023 - incluido consultaMargemDesconto - é fake
// helio 03022023 - adaptacao de produto para produtos
// helio 03022023 - seguros

//echo "metodo=".$metodo."\n";
//echo "funcao=".$funcao."\n";
//echo "parametro=".$parametro."\n";

if ($metodo=="GET"){
  if ($funcao=="crediario"&&$parametro=="cliente") {
    $funcao = "crediario/cliente";
    $parametro = null;
  }
  if ($funcao=="crediario"&&$parametro=="contrato") {
    $funcao = "crediario/contrato";
    $parametro = null;
  }

    switch ($funcao) {
      case "produtos":
        include 'produtos.php';
      break;
      case "seguros":
        include 'seguros.php';
      break;
      case "consultaMargemDesconto":
        include 'consultaMargemDesconto.php';
      break;
      case "crediario/cliente":
        include 'crediariocliente.php';
      break;
      case "crediario/contrato":
        include 'crediariocontrato.php';
      break;

      case "cupomcashback":
        include 'cupomcashbackcliente.php';
      break;
      case "consultabonuscliente":
        include 'consultabonuscliente.php';
      break;
      case "consultaprodutodisp":
        include 'consultaprodutodisp.php';
      break;
      

      default:
        $jsonSaida = json_decode(json_encode(
        array("status" => "400",
            "retorno" => "Aplicacao " . $aplicacao . " Versao ".$versao." Funcao ".$funcao." Invalida"." Metodo ".$metodo." Invalido ")
          ), TRUE);
      break;
    }
  }

 if ($metodo=="PUT"){
    switch ($funcao) {
      default:
        $jsonSaida = json_decode(json_encode(
        array("status" => "400",
            "retorno" => "Aplicacao " . $aplicacao . " Versao ".$versao." Funcao ".$funcao." Invalida"." Metodo ".$metodo." Invalido ")
          ), TRUE);
      break;
    }
  }
  
  if ($metodo=="POST"){
    switch ($funcao) {
      default:
        $jsonSaida = json_decode(json_encode(
        array("status" => "400",
            "retorno" => "Aplicacao " . $aplicacao . " Versao ".$versao." Funcao ".$funcao." Invalida"." Metodo ".$metodo." Invalido ")
          ), TRUE);
      break;
    }
  }
  
  if ($metodo=="DELETE"){
    switch ($funcao) {
      default:
        $jsonSaida = json_decode(json_encode(
        array("status" => "400",
            "retorno" => "Aplicacao " . $aplicacao . " Versao ".$versao." Funcao ".$funcao." Invalida"." Metodo ".$metodo." Invalido ")
          ), TRUE);
      break;
    }
  }
  

