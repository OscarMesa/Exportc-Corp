<?php
include '../utilidades/Variables.php';
include '../utilidades/Conexion.php';
include '../modelo/M_areas.php';
include '../modelo/M_envios.php';
include '../modelo/M_TpEnvio.php';
include './C_envio.php';


$acc = new $_REQUEST['ctr'];
$acc->{$_REQUEST['acc']}();
