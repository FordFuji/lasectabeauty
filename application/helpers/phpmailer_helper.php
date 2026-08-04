<?php
require FCPATH.'composer/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//require 'PHPMailer/src/Exception.php';
//require 'PHPMailer/src/PHPMailer.php';
//require 'PHPMailer/src/SMTP.php';

/*
define('HOST', 'smtp.gmail.com');
define('USERNAME', 'contact.noreply.lasectabeauty@gmail.com');
define('PASSWORD', 'uxrmrzfuwlymvpsk');
define('SMTPSECURE', 'tls');
define('PORT', 587);
*/
define('HOST', 'smtp.lasectabeauty.com');
define('USERNAME', 'info@lasectabeauty.com');
define('PASSWORD', 'Lase1212!');
define('SMTPSECURE', 'ssl');
define('PORT', 465);

//define('SMTPSECURE', 'tls');
//define('PORT', 587);

//define('SMTPSECURE', 'tls');
//define('PORT', 587);

function send_email($sender = array(), $subject, $message, $from_email, $from_name, $file_attachment = array(), $addbcc = array()) {

    $mail = new PHPMailer; 

    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    //Enable SMTP debugging. 
    $mail->SMTPDebug = 2;                               
    //Set PHPMailer to use SMTP.
    $mail->isSMTP(true);            
    //Set SMTP host name                          
    $mail->Host = HOST;
    //Set this to true if SMTP host requires authentication to send email
    $mail->SMTPAuth = true;                          
    //Provide username and password     
    $mail->Username = USERNAME;                 
    $mail->Password = PASSWORD;                           
    //If SMTP requires TLS encryption then set it
    //$mail->SMTPSecure = SMTPSECURE;                           
    //Set TCP port to connect to 
    $mail->Port = PORT;   
    
    $mail->CharSet = 'utf-8';                                

    $mail->From = $from_email;
    $mail->FromName = $from_name;

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
                $mail->AddBCC($arr);     // Add a recipient            
            }
        }
    }
    
    $mail->AddBCC('sitiporn@orange-thailand.com', 'Ford');     // Add a recipient            
    $mail->AddBCC('info@hces.co.th');

    if(!empty($file_attachment)) {
        foreach($file_attachment as $arr) {
            if($arr != '') {
                $mail->AddAttachment($arr);        
            }
        }    
    }

    $mail->isHTML(true);

    $mail->Subject = $subject;
    $mail->Body = $message;
    //$mail->AltBody = "This is the plain text version of the email content";

    
    if(!$mail->send()) {
        echo 'Message could not be sent<br>';
        echo 'Mailer Error: ' . $mail->ErrorInfo.'<br>';
    } else {
        echo 'Message Send Success';
    }
    
    $mail->ClearAddresses();
    

    /*$mail = new PHPMailer();
    $mail->IsSMTP();         
    $mail->CharSet = "utf-8";  // ในส่วนนี้ ถ้าระบบเราใช้ tis-620 หรือ windows-874 สามารถแก้ไขเปลี่ยนได้                        
    $mail->Host     = "mail.outlook.co.th"; //  mail server ของเรา
    $mail->SMTPAuth = true;     //  เลือกการใช้งานส่งเมล์ แบบ SMTP
    $mail->Username = USERNAME;   //  account e-mail ของเราที่ต้องการจะส่ง
    $mail->Password = PASSWORD;  //  รหัสผ่าน e-mail ของเราที่ต้องการจะส่ง

    $mail->From     = $from_email;  //  account e-mail ของเราที่ใช้ในการส่งอีเมล
    $mail->FromName = $from_name; //  ชื่อผู้ส่งที่แสดง เมื่อผู้รับได้รับเมล์ของเรา

    if(!empty($sender)) {
        foreach($sender as $arr) {
            if($arr != '') {
                $mail->addAddress($arr);     // Add a recipient            
            }
        }
    }

    $mail->IsHTML(false);                  // ถ้า E-mail นี้ มีข้อความในการส่งเป็น tag html ต้องแก้ไข เป็น true
    $mail->Subject     =  $subject;        // หัวข้อที่จะส่ง(ไม่ต้องแก้ไข)
    $mail->Body     = $message;                   // ข้อความ ที่จะส่ง(ไม่ต้องแก้ไข)
    if(!$mail->send()) {
        echo 'Mail Send Unsuccess : '.$mail->ErrorInfo;
    } else {
        echo 'Mail Send Success';
    }*/
}
?>