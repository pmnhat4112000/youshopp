<?php include "sendmail/PHPMailer-master/src/PHPMailer.php";
include "sendmail/PHPMailer-master/src/Exception.php";
include "sendmail/PHPMailer-master/src/OAuth.php";
include  "sendmail/PHPMailer-master/src/POP3.php";
include  "sendmail/PHPMailer-master/src/SMTP.php";
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Mailer{
public function dathangmail($tieude,$noidung,$maildathang){
// print_r($mail);

	$mail = new PHPMailer(true);
	$mail->CharSet ='utf-8';
	try {
	    //Server settings
	    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
	    $mail->isSMTP();                                      // Set mailer to use SMTP
	    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	    $mail->SMTPAuth = true;                               // Enable SMTP authentication
	    $mail->Username = 'phungnhat6666@gmail.com';                 // SMTP username
	    $mail->Password = 'kevxrwiicnbctivl';                           // SMTP password
	    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	    $mail->Port = 587;                                    // TCP port to connect to
	 
	    //Recipients
	    $mail->setFrom('phungnhat6666@gmail.com', 'Sofs');
	    $mail->addAddress($maildathang, 'Nhật');     // Add a recipient
	    // $mail->addAddress('phungnhat04112000@gmail.com','nhh');               // Name is optional
	    // $mail->addReplyTo('info@example.com', 'Information');
	    // $mail->addCC('cc@example.com');
	    // $mail->addBCC('bcc@example.com');
	 
	    // //Attachments
	    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	 
	    //Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject = $tieude;
	    $mail->Body    = $noidung;
	    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	 
	    $mail->send();
	    echo 'Message has been sent';
	} 
	catch (Exception $e) {
	    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
	}
	}
}
?>
