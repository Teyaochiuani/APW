<?php

    class conectar{
        protected $dbh;
        protected function conexion(){
            try{
                $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=crud", "root", "")
                return $conectar;
            }catch(Exception $e}{
                print|"¡Error BD!: "
            }
    }

?>

