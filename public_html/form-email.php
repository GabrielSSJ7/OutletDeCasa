<?php

$user = $_POST["usr"];

$email = $_POST['email'];

$tel = $_POST['tel'];

$comment = $_POST['comment'];

// Inclui o arquivo class.phpmailer.php localizado na pasta class
require_once("class.phpmailer.php");

// Inicia a classe PHPMailer
$mail = new PHPMailer(true);

// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem será SMTP


$mail->Host = 'email-ssl.com.br'; // Endereço do servidor SMTP (Autenticação, utilize o host smtp.seudomínio.com.br)
$mail->SMTPAuth = true;  // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
$mail->Port = 465; //  Usar 587 porta SMTP3
$mail->SMTPSecure = "ssl";
$mail->Username = 'contato@webpeople.net.br'; // Usuário do servidor SMTP (endereço de email)
$mail->Password = 'Web@people201'; // Senha do servidor SMTP (senha do email usado)
//Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=    
$mail->SetFrom('contato@webpeople.net.br', $user); //Seu e-mail
//$mail->AddReplyTo('seu@e-mail.com.br', 'Nome'); //Seu e-mail
$mail->Subject = 'Site WebPeople - ' . $email . ' - contato: ' . $tel; //Assunto do e-mail
//Define os destinatário(s)
//=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->AddAddress('contato@webpeople.net.br', 'WebPeople');

//Campos abaixo são opcionais 
//=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//$mail->AddCC('destinarario@dominio.com.br', 'Destinatario'); // Copia
//$mail->AddBCC('destinatario_oculto@dominio.com.br', 'Destinatario2`'); // Cópia Oculta
//$mail->AddAttachment('images/phpmailer.gif');      // Adicionar um anexo
//Define o corpo do email
$mail->MsgHTML($comment);

////Caso queira colocar o conteudo de um arquivo utilize o método abaixo ao invés da mensagem no corpo do e-mail.
//$mail->MsgHTML(file_get_contents('arquivo.html'));
if ($mail->Send()) {
 
    echo "Mensagem enviada com sucesso" ;
} else {
    //caso apresente algum erro é apresentado abaixo com essa exceção.

    echo $mail->errorMessage(); //Mensagem de erro costumizada do PHPMailer
}
?>