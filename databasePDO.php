<?php
    /**
     * 
     * Conectando a la base de datos usando PDO
     * 
     * 
     */

     require ("constantesparaPDO.php");

     class Conexion{
         protected $conexion_db;

         public function Conexion(){
             $this->conexion_db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASENAME2);
             if($this->conexion_db->connect_errno){
                 echo "Falló al conectar a MySql: ".$this->conexion_db->connect_error;

                 return;
             }

             $this->conexion_db->set_charset("UTF8");
         }
     }
?>