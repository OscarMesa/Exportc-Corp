<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of C_envio
 *
 * @author omesagar
 */

class C_envio {
    private $area;
    private $envio;
    private $tpEnvio;
    
    function __construct() {
        $this->area = new M_areas();
        $this->envio = new M_envios();
        $this->tpEnvio = new M_TpEnvio();
    }

    public function obtenerAreas()
    {
        $data = $this->area->getAreas();
        $result_data = array();
//        $result_data [] = array('id'=>'','text'=>'');
        foreach ($data as $row) {
            $result_data[] = array('id'=>$row['id'],'text'=>$row['descripcion'],'data'=>$row);
        }
        return $result_data;
    }
    
    public function obtenerDestinos()
    {
        $data = $this->envio->getEnvios();
        $result_data = array();
//        $result_data [] = array('id'=>'','text'=>'');
        foreach ($data as $row) {
            $result_data[] = array('id'=>$row['id'],'text'=>$row['destino'],'data'=>$row);
        }
        return $result_data;
    }
    
    public function obtenerTiposEnvio()
    {
        $data = $this->tpEnvio->getTpEnvios();
        $result_data = array();
//        $result_data [] = array('id'=>'','text'=>'');
        foreach ($data as $row) {
            $result_data[] = array('id'=>$row['identificador'],'text'=>$row['descripcion'],'data'=>$row);
        }
        return $result_data;
    }
    
    public function searchDestinoAjax()
    {
        $data = $this->envio->getEnvios($_REQUEST['q']);
        $result_data = array();
//        $result_data [] = array('id'=>'','text'=>'');
        foreach ($data as $row) {
            $result_data[] = array('id'=>$row['id'],'text'=>$row['destino'],'data'=>$row);
        }
        echo json_encode($result_data);
    }
    
    
}
