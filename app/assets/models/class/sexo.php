<?php

    class sexo extends conexion
    {
        private $strSexo;
        private $conexion;

        public function __construct()
        {
            $this->conexion = new conexion();
            $this->conexion = $this->conexion->connect();
        }

        public function insertSexo(string $sex)
        {
            $this->strSexo = $sex;

            $sql = "INSERT INTO sexo(sexo) VALUES ('$this->strSexo')";
            
            $insert = $this->conexion->prepare($sql);
            $arrData = array($this->strSexo);
            $resInsert = $insert->execute($arrData);
            $idInsert = $this->conexion->lastInsertId();
            return $idInsert;
        }

    }
    
?>