<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
    <div class="cd-user-modal-container"> <!-- this is the container wrapper -->

        <div id="cd-login"> <!-- log in form -->
            <form name="frm-login" id="frm-login" class="cd-form" method="post" action="<?php echo Yii::app()->createAbsoluteUrl("site/login");?>">
                <p class="fieldset">
                    <label class="image-replace cd-username" for="signin-email">E-mail</label>
                    <input class="full-width has-padding has-border" id="signin-username" type="text" placeholder="" name="LoginForm[username]">
                    <span class="cd-error-message" id="error-login">Error message here!</span>
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-password" for="signin-password">Password</label>
                    <input class="full-width has-padding has-border" name="LoginForm[password]" id="signin-password" type="password"  placeholder="">
                    <!--                            <a href="#0" class="hide-password">Hide</a>-->
                    <span class="cd-error-message">Error message here!</span>
                </p>

<!--                <p class="fieldset">
                    <input type="checkbox" id="remember-me" checked>
                    <label for="remember-me">Remember me</label>
                </p>-->

                <p class="fieldset">
                    <input class="full-width" type="submit" value="Login" id="btn-login">
                </p>
            </form>
            <a href="#0" class="cd-close-form">Close</a> 
        </div> <!-- cd-login -->
    </div> <!-- cd-user-modal-container -->
</div> <!-- cd-user-modal -->

<div id="cargando" hidden="true" style="z-index: 100009; position: fixed; width: 100%; height: 100%; top: 0px; left: 0px; background: #000000; filter: alpha(opacity =60); -moz-opacity: 0.6; opacity: 0.6;">
    <div align="center">
                <img src="images/cargando.gif" alt="image04" style="margin-top: 22%;width: 50px" />
    </div>
</div> 

<script type="text/javascript">
$(document).on('ready',function(){
    $("#signin-username, #signin-password").on("focus",function(){
        $("#error-login").css("visibility","hidden");
    });
    $("#btn-login").on('click',function(e){
        $("#cargando").show();
       jQuery.ajax({
        url: $("#frm-login").attr('action'),
        data:$("#frm-login").serialize()+'&ajax=1',
        type:'POST',
        dataType: 'json',
        beforeSend: function( xhr ) {
          xhr.overrideMimeType( "text/plain; charset=x-user-defined" );
        },
        error:function(msg){
            console.log(msg);
            $("#cargando").hide();
        }
      })
        .done(function( data ) {
            sw = false;
          if ( data.respuesta ) {
//            document.getElementById("frm-login").reset();
            window.location = "http://import.openetwork.co/main.php?action=FormMain";
            sw = true;
            $("#error-login").css("visibility","hidden");
          }else{
              $("#error-login").css("visibility","initial");
              $("#error-login").css("opacity","1");
              $("#error-login").html(data.msg);
          }
          $("#cargando").hide();
          if(sw)
          {
            //  setTimeout(function(){ location.reload(); },300);
          }
        });
//        $("#frm-login").submit();
        e.preventDefault();
    });
});
</script>