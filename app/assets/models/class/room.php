<?php

    class room extends conexion
    {
        private $intHome;
        private $strSector;
        private $strStreet;
        private $conexion;

        public function __construct()
        {
            $this->conexion = new conexion();
            $this->conexion = $this->conexion->connect();
        }

        public function insertRoom(string $home, string $sector, string $street)
        {
            $this->strHome   = $home;
            $this->strSector = $sector;
            $this->strStreet = $street;

            $sql = "INSERT INTO habitacion(habCas, HabSec, habCal)
            VALUES ('$this->strHome', '$this->strSector', '$this->strStreet')";
            
            $insert = $this->conexion->prepare($sql);
            $arrData = array($this->strHome, $this->strSector, $this->strStreet);
            $resInsert = $insert->execute($arrData);
            $idInsert = $this->conexion->lastInsertId();
            return $idInsert;
        }

    }
    
?>