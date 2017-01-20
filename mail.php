<?php
require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'rocteraaprojectforum@gmail.com';                 // SMTP username
$mail->Password = 'ROCterAA123';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('rocteraaprojectforum@gmail.com', 'ROC Ter AA Projectforum');

if(isset($_POST['send'])) {
    if(!empty($_POST['colleges'])) {
        switch ($_POST['colleges']) {
            case 'ict':
                $mail->addAddress('robhendrikx94@hotmail.com', 'Rob Hendrikx'); // Add a recipient
                break;
            case 'business':
                $mail->addAddress('robhendrikx94@gmail.com', 'Rob Hendrikx'); // Add a recipient
                break;
        }
    }
}
/*$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('info@example.com', 'Information');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');*/

/*$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML*/

$voornaam = $_REQUEST['voornaam'];
$achternaam = $_REQUEST['achternaam'];
$email = $_REQUEST['email'];
$studentnummer = $_REQUEST['studentnummer'];
$colleges = $_REQUEST['colleges'];

$mail->Subject = 'Er is een ROC Ter AA Projectforum registratieverzoek voor u';
$mail->Body    = $voornaam . ' ' . $achternaam . ' van het ' . $colleges . ' college heeft een registratieverzoek verstuurd.' . '<br/>Studentnummer: ' . $studentnummer . '<br/>Emailadres: ' . $email;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    $mail->ClearAddresses();
} else { ?>

    <html>
    <head>
        <title>
            Projectforum
        </title>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    </head>
    <body>
    <div id="navbar" class="container-fluid">
        <img src="img/logo.png"/>
        <a class="navtext" href="index.php">ROC Ter AA - Projectforum</a>
    </div>
    <div class="container" style="margin-top: 35px">
        <h1 class="pull-left">Aanvraag verstuurd. Je account wordt door de administrator van jouw college aangemaakt</h1>
    </div>
    </div>
    </body>
    </html>
<?php }

?>