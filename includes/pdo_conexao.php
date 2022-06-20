<?php
    class DB {
        private $host;
        private $db;
        private $user;
        private $password;
        //06051982 ABRE CONEXAO;
        public function AbreConexao($conexao="", $db_name = "",$db_host = "",$db_user = "",$db_passwd = ""){
			if($conexao == 'portal'){
				$db_name = $db_name ? $db_name : DB_NAME_PORTAL;
				$this->db = $db_name;
				$db_host = $db_host ? $db_host : DB_HOST_PORTAL;
				$this->host = $db_host;
				$db_user = $db_user ? $db_user : DB_USER_PORTAL;
				$this->user = $db_user;
				$db_passwd = $db_passwd ? $db_passwd : DB_PASSWD_PORTAL;
				$this->password = $db_passwd;
				$dbhost = 'mysql:host='.$this->host.';dbname='.$this->db;
				try {
					$dbportal = new PDO($dbhost, $this->user, $this->password);
					$dbportal->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$this->connportal = $dbportal;
				}
				catch (PDOException $e) {
					echo limpar($e->getMessage());
					return false;
				}
			}
        }
        //06051982 FECHA CONEXAO;
        public function FechaConexao($conexao=''){
			if($conexao == 'portal'){
				$this->connportal = null;
			}
        }
        //06051982 SELECT FAZER POR AQUI;
        public function select($query, $conexao="") {
			if($conexao == 'portal'){
				$this->consulta = $query;
				try {
					$query = $this->connportal->prepare($this->consulta);
					$query->execute();
					$retorna = $query->fetchAll(PDO::FETCH_ASSOC);
					return $retorna;
				}catch(PDOException $e) {
					echo limpar($e->getMessage());
					return false;
				}
			}
        }
        //06051982 UPDATE INSERT, FAZER POR ESSE;
        public function query($query, $conexao="") {
			if($conexao == 'portal'){
				$this->consulta = $query;
				try {
					$query = $this->connportal->prepare($this->consulta);
					return $query->execute();
				} catch (PDOException $e) {
					echo limpar($e->getMessage());
					return false;
				}
			}
        }
    }
?>