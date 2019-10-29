<?php

	// estrutura do site
	echo '<!DOCTYPE html>
	<html lang="pt-br">
	<head>
	<style type="text/css">
	body{background: #F3F3F3; font: 12pt Tahoma, Geneva, sans-serif; color: color: #252525;}
	h1{font: 25pt Tahoma, Geneva, sans-serif; color: #0080AA; margin-bottom: 10px; text-shadow: 0px 1px 0px #FFFFFF;}
	</style>
	<head>
	<body>';

	// verifica se já existe um cookie aberto
	if(isset($_COOKIE['contato']) && $_COOKIE['contato'] == true){

		exit('<h1>Ops, Calma...</h1><p>Você já enviou uma mensagem para nós em menos de 2 minutos.</p>');
	}

	// verifica se todos os campos foram preenchidos corretamente
	if(in_array(null, $_POST)){

		exit('<h1>Preencha todos os campos corretamente!</h1><p><a href="javascript: return false;" onclick="javascript: history.back();">Clique aqui</a> para voltar ao formulário.</p>');
	}

	if(!preg_match('/^([a-zA-Z0-9\-\_\.]{3,})@([a-zA-Z0-9]{2,})\.([a-zA-Z0-9\.])+$/', $_POST['email'])){

		exit('<h1>E-mail inválido!</h1><p>O endereco de e-mail fornecido é inválido. <a href="javascript: return false;" onclick="javascript: history.back();">Clique aqui</a> para voltar ao formulário.</p>');
	}

	/**
	 * Declarações para enviar o e-mail
	 * @version 27/06/2013 10:51
	*/

	// dados usuário
	$nome 		= addslashes($_POST["nome"]);
	$email 		= $_POST["email"];
	$telefone 	= addslashes($_POST["telefone"]);
	$assunto 	= addslashes($_POST["assunto"]);

	// destinatário
	$para = 'claudio.botelho@live.com';

	// mensagem
	$mensagem = '<div style="font-size: 10pt; font-family: arial;">
		<div style="padding: 10px 0px 10px 0px; margin-bottom: 5px; border-bottom: 1px dotted #CCCCCC;"><b>Nome:</b> <span>'.$nome.'</span></div>
		<div style="padding: 10px 0px 10px 0px; margin-bottom: 5px; border-bottom: 1px dotted #CCCCCC;"><b>E-mail:</b> <span>'.$email.'</span></div>
		<div style="padding: 10px 0px 10px 0px; margin-bottom: 5px; border-bottom: 1px dotted #CCCCCC;"><b>Telefone:</b> <span>'.$telefone.'</span></div>
		<div style="padding: 10px 0px 10px 0px; margin-bottom: 5px; border-bottom: 1px dotted #CCCCCC;"><b>Telefone:</b> <span>'.addslashes($_POST['mensagem']).'</span></div>
	</div>';

	// cabecalho do e-mail
	$cabecalho = "MIME-Version: 1.0\n";
	$cabecalho .= "Content-type: text/html; charset=iso-8859-1\n";
	$cabecalho .= "From: $nome <$email>\n";
	$cabecalho .= "Bcc: Claudio Botelho <claudio.botelho@bugoo.com.br>\n";
	$cabecalho .= "Bcc: Bruno Cavalcante <bruno.cavalcante@bugoo.com.br>\n";
	$cabecalho .= "Bcc: Atendimento <atendimento@bugoo.com.br>\n";

	/**
	 * Faz a gravação do e-mail dentro do arquivo TXT
	 * @version 27/06/2013 11:07
	*/

	$arquivo 	= @fopen('base_emails.txt', 'a+');
	$gravar 	= @fwrite($arquivo, $email.'; ');
	$fechar		= @fclose($arquivo);

	/**
	 * Envia o e-mail para o destinatário
	 * @version 27/06/2013 10:51
	*/

	if(@mail($para, $assunto, $mensagem, $cabecalho)){

		setcookie('contato', true, time()+120); // cria um cookie para impedir que envie uma nova mensagem
		exit("<h1>Mensagem enviada com sucesso!</h1><p>Parabéns, $nome. Sua mensagem foi enviada com sucesso, fique atento, em breve entraremos em contato com você.</p>");
	}

	exit('<h1>Desculpe!</h1><p>Ocorreu alguma falha ao tentar enviar a mensagem. Tente novamente mais tarde.</p>');

?>