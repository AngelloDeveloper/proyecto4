<?php
   class conexion
   {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db   = "fundacion";
    private $conect; 

    public function __construct(){
        $connectionString = "mysql:host=".$this->host.";dbname=".$this->db.";charset=utf8";
        
        try {
            $this->conect = new PDO($connectionString,$this->user,$this->pass);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            $this->conect = 'Connected Failed';
            echo "ERROR: ". $e->getMessage();
        }
    }
    
    public function connect()
    {
        return $this->conect;
    }

    public function recorrer($y)
    {
        return maysqli_fetch_array($y);
    }
}



   
?>