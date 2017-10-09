<?php

// check for form submission - if it doesn't exist then send back to contact form

if (!isset($_POST['save']) || $_POST['save'] != 'contact') {

    echo json_encode(array('erro' => 'Formulário inválido!'));

}

	
// get the posted data

$name = $_POST['name'];

$phone = $_POST['phone'];

$date = $_POST['date'];

$email_address = $_POST['email'];

//$assunto = $_POST['contact_assunto'];

$message = $_POST['mensage'];
	
// check that a name was entered

if (empty($name))
	
    $error = 'Digite seu nome!';

// check that an email address was entered

elseif (empty($email_address)) 

    $error = 'Digite seu endereço de email!';

// check for a valid email address

elseif (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email_address))

    $error = 'Endereço de email inválido!';

// check that a phone number was entered

if (empty($phone))

    $error = 'Digite o telefone da mensagem!';

// check that a message was entered

elseif (empty($message))

    $error = 'Digite sua mensagem!';

		

// check if an error was found - if there was, send the user back to the form

if (isset($error)) {
   echo json_encode(array('erro' => $error));
}


$headers = "MIME-Version: 1.1\n";
$headers .= "Content-type: text/html; charset=utf-8\n";
$headers .= "From:" . $name . " <$email_address>"."\n"; // remetente
$headers .= "Return-Path: " . $name . "<$email_address>"."\n"; // return-path


// write the email content

$email_content = "<u>Nome</u>: $name<br>";

$email_content .= "<u>Telefone</u>: $phone<br>";

$email_content .= "<u>Data</u>: $date<br>";

$email_content .= "<u>Email</u>: $email_address<br>";

$email_content .= "<u>Mensagem</u>:<br>$message";

	

// send the email

//ENTER YOUR INFORMATION BELOW FOR THE FORM TO WORK!
//kdvc04@hotmail.com
$envio = mail("kdvc04@hotmail.com", "Contato Do Site", $email_content, $headers, "-r"."contato@kdvcfilms.com");

// send the user back to the form
if($envio)
	echo json_encode(array('sucesso' => 'Obrigado por sua mensagem!' ));
else
	echo json_encode(array('erro' => 'O email não foi email!'));
?>