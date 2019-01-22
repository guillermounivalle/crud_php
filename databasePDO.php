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
             try {
                 $this->conexion_db=new PDO("mysqlhost=localhost, dbname = mycrudphp", "root", "");
                 $this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                 $this->conexion_db->exec("SET CHARACTER SET utf-8");
                 return $this->conexion_db;
             } catch (Exception $e) {
                 echo "La linea de error es ----> ".$e->getLine();
             }
            
         }
     }

     /**
      *  $this->conexion_db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASENAME1);
      *      if($this->conexion_db->connect_errno){
      *         echo "Falló al conectar a MySql: ".$this->conexion_db->connect_error;
      *     
      *           return;
      *      }
      *
      *       $this->conexion_db->set_charset("UTF8");
      */
?>