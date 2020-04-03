<?php
	if(isset($_POST['acao'])){
		$email = $_POST['email'];
		$pergunta = $_POST['pergunta'];
		$token = md5(uniqid());
		$sql = \MySql::conectar()->prepare("INSERT INTO chamados VALUES (null,?,?,?)");
		$sql->execute(array($pergunta,$email,$token));
		//Enviar e-mail para o usuário dizendo que o chamado foi aberto.
		  $mail = new PHPMailer(true); 

           try{  

            $mail->SMTPDebug = 0;                                 // Enable verbose debug output
		    $mail->isSMTP();                                      // Set mailer to use SMTP
		    $mail->Host = 'smtp.mailtrap.io';  // Specify main and backup SMTP servers
		    $mail->SMTPAuth = true;                               // Enable SMTP authentication
		    $mail->Username = '9952a8e4caf019';                 // SMTP username
		    $mail->Password = '13b724a1be8218';                           // SMTP password
		    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		    $mail->Port = 2525;  
		                

            $mail = new Email('smtp.mailtrap.io', '9952a8e4caf019', '13b724a1be8218', 'benite59');
		    $mail->addAddress('contato@benites13.com', '');

            $mail->isHTML(true);   
            $mail->Subject = 'Seu chamado foi aberto!';
            $url = BASE.'chamado?token='.$token;
            $informacoes = '
            Olá, seu chamado foi criado com sucesso!<br />Utilize o link abaixo para interagir:<br />
            <a href="'.$url.'">Acessar chamado!</a>
            ';
            $mail->Body    = $informacoes; 
            $mail->send();
            } catch (Exception $e) {
		    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
		}
		/*Fim do envio de e-mail*/
		echo '<script>alert("Seu chamado foi aberto com sucesso! Você receberá no e-mail as informações para interagir.")</script>';
	}		

?>
<div class="box-content">
	<h2><i class="fa fa-comments-o"></i>Suporte Online</h2>
<div class="box-chat-online">
	 <form  class="ajax-form" method="post">
	<input style="border-radius: 0;top:220px;"type="email" name="email" placeholder="Seu e-mail...">
	<textarea style="margin-top:-80px;height: 250px;"name="pergunta" placeholder="Qual sua pergunta?"></textarea>
	<input style="width: 200px;margin-top:1%;margin-right:10%;text-align: center;"type="submit" name="acao" value="Enviar!">
   </form>
</div>
<div class="clear"></div>
</div>