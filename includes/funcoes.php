<?php
    //Funções para facilitar o trabalho;
    class functions{
        
        function token($data){
            return md5($data * 7);
        }

        function limpar($dados){
            $dados = str_replace("."," ",str_replace(":"," ",str_replace("]"," ",str_replace("["," ",str_replace("'","",$dados)))));
            return $dados;
        }

        function anti_injection($txt){
            $txt = get_magic_quotes_gpc() == 0 ? addslashes($txt) : $txt;
            return preg_replace("@(--|\#|\*|;|=)@s", "", $txt);
        }

        function datainsert($data){
            $data = str_replace("/", "-", $data);
            $data = date('Y-m-d',time($data));
            return $data;
        } 
    }
?>