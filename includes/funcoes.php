<?php
    function token($data){
        return md5($data * 7);
    }
    function limpar($dados){
        $dados = str_replace("."," ",str_replace(":"," ",str_replace("]"," ",str_replace("["," ",str_replace("'","",$dados)))));
        return $dados;
    }
?>