<?php

    /**
     * 
     * Obteniendo datos usando POO
     * 
     */
    
    require("databasePDO.php");

     class ObtenerDatos extends Conexion {
        public function ObtenerDatos(){
            parent::__construct(); //Ejecutamos implicitamente el constructor del archivo databasePDO.php
        }   

        public function get_data(){
                    
            $result = $this->conexion_db->query('SELECT * FROM userdata');
            $data = $result->fetch_all(MYSQLI_ASSOC); 

            return $data;
        }
     }

?>  