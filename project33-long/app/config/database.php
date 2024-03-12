<?php

    class DBconnection{
        private $DBhost;
        private $DBname;
        private $DBuser;
        private  $DBpass;
        private $conn;

        public function __construct()
        {
            $this->DBhost = DB_host;
            $this->DBname = DB_name;
            $this->DBuser = DB_user;
            $this->DBpass = DB_pass;
            try {
                $this->conn = new PDO("mysql:host={$this->DBhost};dbname={$this->DBname}",$this->DBuser,$this->DBpass);

            }catch (PDOException $ex){;
                $this->conn = null;
            }

        }
        public function getconnection(){
                return $this->conn;
        }





}