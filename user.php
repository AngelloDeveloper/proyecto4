<?php
    class user extends conexion
    {
        private $strEmail;
        private $strPassword;
        private $conexion;

        public function __construct()
        {
            $this->conexion = new conexion();
            $this->conexion = $this->conexion->connect();
        }

        public function insertUser(string $email, string $password)
        {
            $this->strEmail = $email;
            $this->strPassword = $password;

            $sql = "INSERT INTO usuario(user,pass) VALUES ('$this->strEmail','$this->strPassword')";
            
            $insert = $this->conexion->prepare($sql);
            $arrData = array($this->strEmail, $this->strPassword);
            $resInsert = $insert->execute($arrData);
            $idInsert = $this->conexion->lastInsertId();
            return $idInsert;
        }

        public function loginUser() {
            /*inicio de sesion*/
        }
    }
    
?>