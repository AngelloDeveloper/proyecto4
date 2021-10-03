<?php

    class direction extends conexion
    {
        private $strCountry;
        private $strState;
        private $strMunicipality;
        private $strTown;
        private $strPostalCode;
        private $strBedroom;

        public function __construct()
        {
            $this->conexion = new conexion();
            $this->conexion = $this->conexion->connect();
        }

        public function insertDirection(string $Country, string $State, string $Municipality, string $Town, string $PostalCode)
        {
            $this->strCountry       = $Country;
            $this->strState         = $State;
            $this->strMunicipality  = $Municipality;
            $this->strTown          = $Town;
            $this->strPostalCode    = $PostalCode;

            $sql = "INSERT INTO direccion(dirPas, dirEst, dirMun, dirCiu, dirCod)
            VALUES ('$this->strCountry',       
                    '$this->strState',
                    '$this->strMunicipality',
                    '$this->strTown',
                    '$this->strPostalCode'
                    )";
            
            $insert = $this->conexion->prepare($sql);
            $arrData = array($this->strCountry,       
                            $this->strState,
                            $this->strMunicipality,
                            $this->strTown,
                            $this->strPostalCode
                        );
            $resInsert = $insert->execute($arrData);
            $idInsert = $this->conexion->lastInsertId();
            return $idInsert;
        }

    }
    
?>