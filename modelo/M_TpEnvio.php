<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_TpEnvio
 *
 * @author omesagar
 */
class M_TpEnvio extends Conexion{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getTpEnvios()
    {
        $data = $this->prepare("SELECT * FROM tipo_envio");
        $data->execute();
        return ($data->fetchAll());
    }
}
