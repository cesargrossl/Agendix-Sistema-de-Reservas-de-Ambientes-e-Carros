<?php
    //incluir, alterar ou excluir dados;
    include_once("../includes/funcoes.php");
    (isset($_POST["rotina"])) ? $rotina = trim($_POST["rotina"]) : $rotina = null;
    (isset($_POST["token"])) ? $token = $_POST["token"] : $token = null;
    if($token != token(date("Ymd"))){
        $token = 'invalido';
        $login = 'Não validou';
        die();
    }else{
        $db_valida = "srv_portal";
        include_once("../includes/db_banco.php");
        include_once("../includes/pdo_conexao.php");
        $db = new DB();
        if ($rotina == 'frm_trocasenha'){
            (isset($_POST["usuario"])) ? $usuario = trim($_POST["usuario"]) : $usuario = null;
            (isset($_POST["senha"])) ? $senha = trim($_POST["senha"]) : $senha = null;
            //não deixar salvar caso for a mesma senha;
            if(strlen($senha) > 20){
                die();
            }
            $db->AbreConexao('portal');
            $qry = $db->query(" UPDATE tb_usuarios SET usu_senha ='".md5($senha)."', usu_dtsenha = '".date("Y-m-d")."' WHERE usu_login = '".$usuario."' ", "portal");
            $db->FechaConexao('portal');
            echo $qry;
           // $json = array("tipo"=>$qry);
           // echo $retorno = json_encode($json);
        }

    }
?>