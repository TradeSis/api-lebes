<?php
// helio 03022023 adaptacao para lojas/prevenda
// helio 03022023 alterado nome de consultar.php para produtos.php
// helio 26012023 18:10
$log_datahora_ini = date("dmYHis");
$acao="produtos"; 
$arqlog = defineCaminhoLog()."apilebes_".$acao."_".date("dmY").".log";
$arquivo = fopen($arqlog,"a");
fwrite($arquivo,$log_datahora_ini."$acao"."-PARAMETRO->".$parametro."\n");   

  $codigoProduto = htmlspecialchars($parametro);
  $regs = 0;
  $produtos = array();

  $produto = array("procod" => 211, 
                      "pronom" => "FOGAO LENHA 1",
                      "precoVenda"  =>  "21.22",
                      "precoProm"  =>  "16.22" );

  if (!empty($codigoProduto)) {
    if ($codigoProduto == 211) {
        array_push($produtos,$produto);
        $regs .= 1;
    }
  } else {
      array_push($produtos,$produto);
      $regs .= 1;      
  }


  $produto = array("procod" => 210, 
                      "pronom" => "FOGAO LENHA NOVO",
                      "precoVenda"  =>  "1221.22",
                      "precoProm"  =>  "1000.00" );

  if (!empty($codigoProduto)) {
    if ($codigoProduto == 210) {
        array_push($produtos,$produto);
        $regs .= 1;        
    }
  } else {
      array_push($produtos,$produto);
      $regs .= 1;      
  }

if ($regs==0) {
  $jsonSaida = array(
    "status" => 400,
    "retorno" => "produto não encontrado"
  );

} else { 
  if ($regs==1) {
    $jsonSaida = array("produtos" => $produtos[0]);
  } else {
    $jsonSaida = array("produtos" => $produtos);
  }
}

?>

