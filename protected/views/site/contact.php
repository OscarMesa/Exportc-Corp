<div class="templatemo-contact">
    <div class="container" id="templatemo-contact">
        <div class="row" id="prueba1">
            <div class="templatemo-line-header head_contact" >
                <div class="text-center">
                    <hr class="team_hr team_hr_left hr_gray"/><span class="txt_darkgrey">CONTACTO</span>
                    <hr class="team_hr team_hr_right hr_gray"/>
                </div>
            </div>

            <div class="col-md-8">
                <div class="templatemo-contact-map" id="map-canvas"> </div>  
                <div class="clearfix"></div>
                <i>You can find us on 123 Dagon Studio, Yankin Street, <span class="txt_orange">Digital Estate</span> in Yangon.</i>
            </div>
            <div class="col-md-4 contact_right">
                <p>Lorem ipsum dolor sit amet, consectetu adipiscing elit pendisse as a molesti.</p>
                <p><img src="images/locationAzul.png" alt="icon 1" /> 123 Dagon Studio, Yakin Street, Digital Estate</p>
                <p><img src="images/phone-azul.png"  alt="icon 2" /> +86 132 68284164 +86 13926489420 +86 13926234354 +57 (4) 2040782</p>
                <p><img src="images/globeAzu.png" alt="icon 3" /><a class="link_orange" href="#"><span class="txt_orange">info@importlogistica.co</span></a></p>
                <form class="form-horizontal" id="frm-contactanos" action="#" method="POST" style="margin-top: 15px">
                    <div class="form-group">
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Tu nombre..." maxlength="40" />
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Tu correo..." maxlength="40" />
                    </div>
                    <div class="form-group">
                        <textarea  class="form-control" name="mensaje" id="mensaje" style="height: 130px;" placeholder="Escribe un mensaje..."></textarea>
                    </div>
                    <img id="img-load" src="<?php echo Yii::app()->getBaseUrl(true) ?>/images/load.gif"/><button type="submit" id="enviar-correo" class="btn btn-blue pull-right">Enviar mensaje</button>
                    <div id="msg-success-mail"style="margin-top: 62px;display: none" class="alert alert-block alert-success">El mensaje a sido enviado exitosamente</div>
                </form>

            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /#templatemo-contact -->
<script type="text/javascript">
    $(document).on('click', '#enviar-correo', function (e) {
        e.preventDefault();
        if ($("#frm-contactanos").valid()) {
            $("#img-load").css("display", "block");
            $.ajax({
                url: '<?php echo Yii::app()->createAbsoluteUrl("site/EnviarCorreoContactanos"); ?>',
                data: $("#frm-contactanos").serialize(),
                type: 'POST',
                dataType: 'JSON',
                success: function (data) {
                    $("#img-load").css("display", "none");
                    $("#msg-success-mail").show();
                    setTimeout(function () {
                        $("#msg-success-mail").hide();
                        document.getElementById("frm-contactanos").reset();
                    }, 2200);
                    console.log(data);
                },
                error: function (data) {
                    $("#img-load").css("display", "none");
                    console.log(data);
                }
            });
        }
    });
    $(document).on("ready", function () {
        $("#frm-contactanos").validate({
            rules: {
                nombre: "required",
                mensaje: {
                    required: true,
                    minlength: 20
                },
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                nombre: "Por favor ingrese su nombre.",
                mensaje: {
                    required: "Por favor ingrese un mensaje.",
                    minlength: "El mensaje debe contar con un minimo de 20 caracteres."
                },
                email: {
                    required: "Por favor ingrese un correo electrónico.",
                    email: "Ingrese un correo valido.",
                },
            }
        });

    });
</script>