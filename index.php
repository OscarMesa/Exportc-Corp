<?php
include './utilidades/Variables.php';
include './utilidades/Conexion.php';
include './modelo/M_areas.php';
include './modelo/M_envios.php';
include './modelo/M_TpEnvio.php';
include './controlador/C_envio.php';

$ctr_areas = new C_envio();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css"/>

        <link rel="stylesheet" type="text/css" media="screen" href="lib/select2-3.5.2/select2.css" />

        <script src="lib/jquery-ui-1.11.2.custom/external/jquery/jquery.js"></script>
        <script src="lib/jquery-ui-1.11.2.custom/jquery-ui.js"></script>
        <script src="lib/select2-3.5.2/select2.js"></script>
        <script src="lib/select2-3.5.2/select2_locale_es.js"></script>

        <title>Calculadora de envios</title>
    </head>
    <body>

        <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tbody>
                <tr>
                    <td></td><td class="rich-table-cell tabla-filtro" id="cotizacionForm:j_id87"><div class="rich-panel " id="cotizacionForm:datoscotizacionPanelId"><div class="rich-panel-header " id="cotizacionForm:datoscotizacionPanelId_header">Entrada de datos</div><div class="rich-panel-body " id="cotizacionForm:datoscotizacionPanelId_body"><table border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tbody>
                                        <tr>
                                            <td></td><td class="rich-table-cell tabla-filtro" id="cotizacionForm:j_id89"><table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                    <tbody>
                                                        <tr>
                                                            <td></td><td class="rich-table-cell tabla-filtro" id="cotizacionForm:j_id95" width="10"></td>
                                                            <td></td><td class="rich-table-cell tabla-filtro" id="cotizacionForm:j_id96" width="10"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tbody>
                                        <tr>
                                            <td></td><td class="rich-table-cell tabla-filtro" id="cotizacionForm:j_id98"><table>
                                                    <tbody>
                                                        <tr>
                                                            <td><div id="cotizacionForm:j_id100">

                                                                    <div class="prop"><label for="cotizacionForm:j_id100:j_id108" class="name  ">
                                                                            Origen<span id="cotizacionForm:j_id100:j_id104" class="required">*</span></label><span id="cotizacionForm:j_id100:j_id106" class="value  ">
                                                                            <input type="hidden" id="area" name="area" style="width:260px"/>	

                                                                        </span>
                                                                        <span id="cotizacionForm:j_id100:j_id110" class="error"></span>

                                                                    </div></div></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td></td><td class="rich-table-cell tabla-filtro" id="cotizacionForm:destinoId"><table>
                                                    <tbody>
                                                        <tr>
                                                            <td><div id="cotizacionForm:j_id130">

                                                                    <div class="prop"><label for="cotizacionForm:j_id130:j_id138" class="name  ">
                                                                            <?php $ctr_areas->obtenerDestinos(); ?>
                                                                            Destino<span id="cotizacionForm:j_id130:j_id134" class="required">*</span></label><span id="cotizacionForm:j_id130:j_id136" class="value  ">
                                                                            <input type="hidden" id="destion" name="destino" size="1" style="width:260px"/>	

                                                                        </span><span id="cotizacionForm:j_id130:j_id140" class="error"></span>

                                                                    </div></div></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td><td class="rich-table-cell tabla-filtro" id="cotizacionForm:tipoDocumentoId"><table>
                                                    <tbody>
                                                        <tr>
                                                            <td><div id="cotizacionForm:j_id145">

                                                                    <div class="prop"><label for="cotizacionForm:j_id145:tipoDocumentoValueId" class="name  ">
                                                                            Tipo de envío<span id="cotizacionForm:j_id145:j_id149" class="required">*</span></label><span id="cotizacionForm:j_id145:j_id151" class="value  ">
                                                                                <input type="hidden" id="tpEnvio" name="tpEnvio" class="tipoDocumentoValueId" size="1" onchange="" style="width:260px"><br>	
                                                                        </span><span id="cotizacionForm:j_id145:j_id156" class="error"></span>

                                                                    </div></div></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div id="info_correo" style="display: none">
                                                                    <label id="lbl-area"></label><br/>
                                                                    <label id="lbl-destino"></label><br/>
                                                                    <label id="lbl-costoEnvio"></label><br/>
                                                                </div>
                                                                <div id="info_carga" style="display: none">
                                                                    <label>Peso (kg): <input type="text" name="txtpeso" id="txtpeso" placeholder="Peso"/></label><br/>
                                                                    <label>Costo envío ($):<p id="lbl-costoEnvioCarga" style="display: inline;"></p></label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                            <td></td><td class="rich-table-cell tabla-filtro" id="cotizacionForm:mensajePesoId"><span class="outMensajePesoId"></span></td>
                                        </tr>

                                    </tbody>
                                </table>
                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tbody>
                                        <tr>
                                            <td></td><td class="rich-table-cell tabla-filtro" id="cotizacionForm:j_id299"><table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                    <tbody>
                                                        <tr>
                                                            <td></td><td class="rich-table-cell tabla-filtro" id="cotizacionForm:j_id301" width="10"><input type="submit" name="cotizacionForm:j_id302" value="Cotizar"></td>
                                                            <td></td><td class="rich-table-cell tabla-filtro" id="cotizacionForm:j_id303" width="10"><input onclick="location.href = '/conecta2/pub/cotizacion.seam?actionMethod=pub%2Fcotizacion.xhtml%3Agts.cotizacionAction.limpiarDatosCotizacion%28%29&amp;cid=701984';
                                                                    return false;" id="cotizacionForm:j_id304" value="Limpiar" type="button"></td>
                                                            <td></td><td class="rich-table-cell tabla-filtro" id="cotizacionForm:j_id305"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td></td><td class="rich-table-cell tabla-filtro" id="cotizacionForm:j_id307">Los campos con * son obligatorios</td>
                                                        </tr>

                                                        <tr>
                                                            <td></td><td class="rich-table-cell tabla-filtro" id="cotizacionForm:mensajeRangoDimensionId"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div></div></td>
                </tr>
                <tr>
                    <td></td><td class="rich-table-cell tabla-filtro" id="cotizacionForm:resultadosId"></td>
                </tr>
            </tbody>
        </table> 

    </body>
    <script type="text/javascript">
        $(document).on('ready', function () {
            $("#area").select2({
                placeholder: "Area",
                query: function (query) {
                    var data = {
                        results: <?php echo json_encode($ctr_areas->obtenerAreas()); ?>
                    };

                    query.callback(data);
                }
            });
            $("#area").on("change", function () {
                habilitarTipoEnvio();
                if($("#tpEnvio").select2('data') != null && $("#tpEnvio").select2('data').data.identificador == 'C')
                {
                    listarDatosEnvio();
                }
            });
            $("#destion").select2({
                placeholder: "Destino",
                query: function (query) {
                    var data = {
                        results: <?php echo json_encode($ctr_areas->obtenerDestinos()); ?>
                    };

                    query.callback(data);
                }
            });
            $("#destion").on("change", function () {
                habilitarTipoEnvio();
                if($("#tpEnvio").select2('data') != null && $("#tpEnvio").select2('data').data.identificador == 'C')
                {
                    listarDatosEnvio();
                }
            });
            $("#tpEnvio").select2({
                placeholder: "Tipo envio",
                query: function (query) {
                    var data = {
                        results: <?php echo json_encode($ctr_areas->obtenerTiposEnvio()); ?>
                    };
                    query.callback(data);
                }
            });


            $("#tpEnvio").select2('disable');

            $("#tpEnvio").on("change", function (e) {
                listarDatosEnvio();
            });
            
            $("#txtpeso").keyup(function (){
                this.value = (this.value + '').replace(/[^0-9+\-Ee.]/g,'');
                if(this.value <= 30)
                {
                    $("#lbl-costoEnvioCarga").html("<b>" +$("#destion").select2("data").data.minimoKG+ "</b>");
                }else{
                    $("#lbl-costoEnvioCarga").html("<b>" + ((this.value - 30) * (parseInt($("#destion").select2("data").data.kilo)+parseInt($("#destion").select2("data").data.minimoKG))) + "</b>");
                }
            });
        });
        
        function listarDatosEnvio()
        {
            if($("#tpEnvio").select2('data').data.identificador == 'C'){
                $("#lbl-area").html("Área:<b>"+$("#area").select2('data').data.descripcion+"</b>");
                $("#lbl-destino").html("Destino:<b>"+$("#destion").select2('data').data.destino+"</b>");
                $("#lbl-costoEnvio").html("Costo:<b>"+$("#destion").select2('data').data.sobre+"</b>");
                $("#info_correo").css("display","block");
                $("#info_carga").css("display","none");
            }else if($("#tpEnvio").select2('data').data.identificador == 'P'){
                $("#info_carga").css("display","block");
                $("#info_correo").css("display","none");
            }else{
                $("#info_correo").css("display","none");
                $("#info_carga").css("display","none");
            }
        }

        function habilitarTipoEnvio() {
            if ($("#destion").select2("data") != null && $("#area").select2("data"))
                $("#tpEnvio").select2('enable');
            else
                $("#tpEnvio").select2('disable');
        }
        
        
        function calcularTarifa()
        {
            $("#txtpeso")
        }
    </script>

</html>

