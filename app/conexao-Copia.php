<?php

    include_once('database/mysql.php');
    include_once('database/progress.php');
    function defineCaminhoLog() {
        $pasta = '"/ws/tslog/';
        return $pasta;
    } 
    function defineConexaoProgress()
    {
        $progresscfg = "progress.cfg";
        $progresscfg="progress.cfg";
        $dlc                = "/usr/dlc";
        $tmp            = "/u/bsweb/works/";
        $pf                = "/admcom/bases/wsp2k.pf";
        $propath        = "/u/bsweb/progr/ts/api/app/,/admcom/progr/,";
        $proginicial = "/u/bsweb/progr/ts/api/app/database/progress.p";
    
        return        array(   "progresscfg" => $progresscfg, 
                               "dlc" => $dlc,
                               "pf" => $pf, 
                               "tmp" => $tmp,
                               "propath" => $propath,
                               "proginicial" => $proginicial
                                );
    }
    
    
    function defineConexaoMysql () {
    
        $host = 'localhost';
        $base = '';
        $usuario = '';
        $senhabd = '';
    
        return        array(   "host" => $host, 
                               "base" => $base,
                            "usuario" => $usuario, 
                            "senhadb" => $senhabd
                                );
    
    }
    
    
?>
