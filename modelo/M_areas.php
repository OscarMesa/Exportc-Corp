<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of area
 *
 * @author omesagar
 */


class M_areas extends Conexion{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getAreas()
    {
        $data = $this->prepare("SELECT * FROM areas");
        $data->execute();
        return ($data->fetchAll());
    }

}
