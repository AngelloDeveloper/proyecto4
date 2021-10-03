<?php

    class beneficiary extends conexion
    {
        private $strBenef;
        private $conexion;

        public function __construct()
        {
            $this->conexion = new conexion();
            $this->conexion = $this->conexion->connect();
        }

        public function insertBeneficiary(string $benef)
        {
            $this->strBenef = $Benef;

            $sql = "INSERT INTO beneficiario(benPare) VALUES ('$this->strBenef')";
            
            $insert = $this->conexion->prepare($sql);
            $arrData = array($this->strBenef);
            $resInsert = $insert->execute($arrData);
            $idInsert = $this->conexion->lastInsertId();
            return $idInsert;
        }

    }
    
?>