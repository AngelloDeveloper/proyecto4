<?php

    class affiliate extends conexion
    {
        private $intDni;
        private $strName;
        private $strLastName;
        private $dateBirth;
        private $bigPhone;
        private $strEmail;
        private $intAge;
        // private $intStatus;
        private $conexion;

        public function __construct()
        {
            $this->conexion = new conexion();
            $this->conexion = $this->conexion->connect();
        }
        
        public function insertAffiliate(int $Dni, string $Name, string $LastName, string $Birth, string $Phone, string $Email, string $Age)
        // int $Status
        
        {
            $this->intDni       = $Dni;
            $this->strName      = $Name;
            $this->strLastName  = $LastName;
            $this->dateBirth    = $Birth;
            $this->bigPhone     = $Phone;
            $this->strEmail     = $Email;
            $this->intAge       = $Age;
            // $this->intStatus    = $Status;

            $sql = "INSERT INTO afiliado(afiDni, afiNom, afiApe, afiNac, afiTlf, afiCor, afiEda)
             VALUES ('$this->intDni', 
                    '$this->strName', 
                    '$this->strLastName',
                    '$this->dateBirth',
                    '$this->bigPhone',
                    '$this->strEmail',
                    '$this->intAge'
                    )";
            
            // -- '$this->intStatus'
            $insert = $this->conexion->prepare($sql);
            $arrData = array($this->intDni, 
                            $this->strName, 
                            $this->strLastName,
                            $this->dateBirth,
                            $this->bigPhone,
                            $this->strEmail,
                            $this->intAge
                            // $this->intStatus
                        );
            $resInsert = $insert->execute($arrData);
            $idInsert = $this->conexion->lastInsertId();
            return $idInsert;
        }

        public function loginUser() {
            /*inicio de sesion*/
        }
    }
    
?>

