<?php

use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once FCPATH.'composer/vendor/autoload.php';

define('HOST', 'smtp.gmail.com');
define('USERNAME', 'contact.lasectabeauty@gmail.com');
define('PASSWORD', 'hptdebgprzripyyz');
define('SMTPSECURE', 'tls');
define('PORT', 587);

function send_email($sender = array(), $subject, $message, $from_email, $from_name, $file_attachment = array(), $addbcc = array()) {

	$mail = new PHPMailer(true);

	$mail->SMTPOptions = array(
		'ssl' => array(
			'verify_peer' => false,
			'verify_peer_name' => false,
			'allow_self_signed' => true
		)
	);

	try {
	    //Server settings                                      
		$mail->SMTPDebug = 2;							// Enable verbose debug output

	    $mail->isSMTP();                                            // Set mailer to use SMTP
	    $mail->Host       = HOST;  // Specify main and backup SMTP servers
	    $mail->SMTPAuth = true;                                // Enable SMTP authentication
	    $mail->Username   = USERNAME;                     // SMTP username
	    //$mail->Password   = 'qwaszxcvb123@';
	    $mail->Password   = PASSWORD;                                 // SMTP password
	    $mail->SMTPSecure = SMTPSECURE;                                  // Enable TLS encryption, `ssl` also accepted
	    $mail->Port       = PORT;                                    // TCP port to connect to

	    //Recipients
	    $mail->setFrom($from_email, $from_name);
	    //$mail->addAddress('sitiporn@orange-thailand.com', 'Ford Fuji');     // Add a recipient
	    
	    if(!empty($sender)) {
			foreach($sender as $arr) {
				if($arr != '') {
					$mail->addAddress($arr);     // Add a recipient			
				}
			}
		}

		if(!empty($addbcc)) {
			foreach($addbcc as $arr) {
				if($arr != '') {
					$mail->addBCC($arr);     // Add a recipient			
				}
			}
		}

	    //$mail->addBCC('sitiporn@orange-thailand.com');

	    if(!empty($file_attachment)) {
			foreach($file_attachment as $arr) {
				if($arr != '') {
					$mail->AddAttachment($arr);		
				}
			}	
		}

	    // Content
	    $mail->isHTML(true);

		$mail->Subject = $subject;
		$mail->Body = $message;

	    $mail->send();
	    echo 'Message has been sent';
	} catch (Exception $e) {
	    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}

	$mail->ClearAddresses();
}
?>
