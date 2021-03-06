<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}
        
        
        /**
         * Con este metodo se puede enviar un correo de contactanos a gmail.
         */
        public function actionEnviarCorreoContactanos()
        {
            Yii::import('ext.yii-mail.YiiMailMessage');
            $message = new YiiMailMessage;
            $message->view = "nuevoMensaje";
            $params = array('nombre' => $_REQUEST["nombre"],'email' => $_REQUEST["email"],'mensaje' => $_REQUEST["mensaje"]);
            $message->subject = ucwords($_REQUEST["nombre"]).' a enviado un nuevo mensaje.';
            $message->setBody($params, 'text/html');
            $message->to = array('import.openetwork@gmail.com'=>'importaciones','waldo.j510@gmail.com'=>'Jonhatan');
            $message->from = array($_REQUEST["email"]=>$_REQUEST["nombre"]);
            Yii::app()->mail->send($message);
        }

        public function validarLogin()
        {
            if(isset(Yii::app()->session['user']))
            {
                $usuario = Yii::app()->session['user'];
                $usrdDB = Perfil::model()->find("IdPerfil=?",array($usuario->IdPerfil));
                if($usrdDB->enSesion == 0)
                    unset (Yii::app()->session['user']);
            }
        }

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
            $this->validarLogin();
            $this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
                    $usuario = Perfil::model()->find("Usuario=? AND Clave=?",array($_POST['LoginForm']['username'],$_POST['LoginForm']['password']));
                    if($usuario){
                        $usuario->ultimoIngreso = date("Y-m-d H:i:s");
                        $usuario->enSesion = 1;
                        $usuario->save();
                        Yii::app()->session['user'] = $usuario;
                        echo json_encode(array('respuesta'=>true,'msg'=>'Ingreso exitoso','user'=>$usuario->attributes));die;
                    }else{
                        echo json_encode(array('respuesta'=>false,'msg'=>'El usuario o contraseña son incorrectos'));die;
                    }
//                    var_dump($answer);
		}else{
                    $this->validarLogin();
                }
		// display the login form
                $this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
//		Yii::app()->user->logout();
            $usuario = Yii::app()->session['user'];
            $usuario->enSesion = 0;
            $usuario->save();
            unset(Yii::app()->session['user']);
            $this->redirect(Yii::app()->homeUrl);
	}
}