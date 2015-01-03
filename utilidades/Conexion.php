<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conexion
 *
 * @author Calcifer
 */
class Conexion extends PDO{
    
    public function __construct() {
        parent::__construct('mysql:host='.HOST_MYSQL.';dbname='.BD_MYSQL, USER_MYSQL, PASSWORD_MYSQL);
    }
    
    public function getCostosEnvio()
    {
        $data = $this->prepare("SELECT * FROM costoenvio ORDER BY destino");
        $data->execute();
        return ($data->fetchAll());
    }
}
