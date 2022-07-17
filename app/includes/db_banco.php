<?php
	//06051982 CONEXÕES DO BANCO;
    if($db_valida == 'srv_portal'){
        define('DB_NAME_PORTAL',"db_agendix");
        define('DB_HOST_PORTAL',"mysql");
        define('DB_USER_PORTAL',$_ENV['MYSQL_USER']);
        define('DB_PASSWD_PORTAL',$_ENV['MYSQL_PASS']);
    }
?>

