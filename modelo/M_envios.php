<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_envios
 *
 * @author omesagar
 */
class M_envios extends Conexion{
  public function __construct() {
        parent::__construct();
    }
    
    public function getEnvios($des = "")
    {
        $data = $this->prepare("SELECT * FROM destinos WHERE destino LIKE '%".$des."%' LIMIT 10");
        $data->execute();
        return ($data->fetchAll());
    }
}
