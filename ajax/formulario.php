<?php
     include('../config.php');
      $data = array();
      $assunto = 'Nova mensagem do site';
	  $corpo = '';
	  foreach ($_POST as $key => $value) {
	  $corpo.= ucfirst($key).":".$value;
	  	$corpo.="<hr>";
	  }
	  $info = array('assunto'=>$assunto,'corpo'=>$corpo);
	  $mail = new Email('smtp.mailtrap.io', '9952a8e4caf019', '13b724a1be8218', 'benite59');
		  $mail->addAdress('contato@benites13.com','benite59');
		  $mail->formatarEmail($info);
		  if($mail->enviarEmail())
			{
				$data['sucesso'] = true;

			}

			else
			{

			   $data['erro'] = true;	

		   }
            $data['retorno'] = 'sucesso';

			die(json_encode($data));
?>