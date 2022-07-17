<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json;charset=utf-8;');
    //rotina para efetuar o login no sistema;
    include_once("../includes/funcoes.php");
    $funcoes = new funcoes();
    (isset($_POST["log_token"])) ? $log_token = $_POST["log_token"] : $log_token = null;
    if($log_token != $funcoes->token(date("Ymd"))){
        $token = 'invalido';
        $login = 'Não validou';
    }else{
        $token = 'valido';
        (isset($_POST["log_usuario"])) ? $log_usuario = trim($_POST["log_usuario"]) : $log_usuario = null;
        (isset($_POST["log_senha"])) ? $log_senha = trim($_POST["log_senha"]) : $log_senha = null;
        $db_valida = "srv_portal";
        include_once("../includes/db_banco.php");
        include_once("../includes/pdo_conexao.php");
        $db = new DB();
        $db->AbreConexao('portal');
        $qry;$row;$cont_qry;
        $qry = $db->select("SELECT usu_login, usu_nome, usu_senha FROM tb_usuarios WHERE usu_del = '' AND usu_login = '".$log_usuario."' AND usu_senha = '".md5($log_senha)."' ", "portal");
        if (count($qry)) {
            foreach ($qry as $cont_qry=>$row) {
                session_start();
                $login = 'valido';
                $_SESSION["log_usuario"] = $row["usu_login"];
                $_SESSION["log_nome"] = $row["usu_nome"];
                $_SESSION["log_token"] = token(date("Ymd"));
                $_SESSION["log_data"] = date("Y-m-d");
                $_SESSION["log_senha"] = $row["usu_senha"];
            }
        }else{
            $login = 'incorreto';
        }
        $db->FechaConexao('portal');
    }
    $json = array("token"=>$token, "login"=>$login);
    echo $retorno = json_encode($json);
?>