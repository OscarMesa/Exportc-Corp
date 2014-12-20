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
    
    public function getEnvios()
    {
        $data = $this->prepare("SELECT * FROM destinos");
        $data->execute();
        return ($data->fetchAll());
    }
}
