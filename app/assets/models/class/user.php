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

            $encrypt = hash('sha256', "1NsT3pD3veL0p3R$" .  $this->strPassword);

            $sql = "INSERT INTO usuario(user,pass) VALUES ('$this->strEmail','$encrypt')";
            
            $insert = $this->conexion->prepare($sql);
            $arrData = array($this->strEmail, $this->strPassword);
            $resInsert = $insert->execute($arrData);
            $idInsert = $this->conexion->lastInsertId();
            return $idInsert;
        }

        public function loginUserAll() {
            /*inicio de sesion*/
           $sql = "SELECT * FROM usuario";
           $execute = $this->conexion->query($sql);
           $request = $execute->fetchall(PDO::FETCH_ASSOC);
           return $request;
        }

        public function loginUser($user, $pass) {
            $sql = "SELECT * FROM usuario WHERE user = '$user' AND pass = '$pass'";
            $query = $this->conexion->prepare($sql);
            $arrData = array($user, $pass);
            $result = $query->execute($arrData);
            if($result) {
                $request = $query->fetch(PDO::FETCH_ASSOC);
                session_start();
                $_SESSION['id_user']    = $request['idUser'];
                $_SESSION['user']       = $request['user'];
                $_SESSION['status']     = $request['sta_tus'];
                header('Location: dashboard.php');
            } else {
                return false;
            }
        }

        public function encrypt($value=null) {
            return hash('sha256', "1NsT3pD3veL0p3R$" . $value);
        }

        public function logout() {
            session_start();
            session_destroy();
            header('Location: index.php');
        }
    }
    
?>