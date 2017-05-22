<?php
require 'PHPMailer-master/PHPMailerAutoload.php';//include phpmailer

if (isset($_POST['submit'])) {//check submit

    $email = $_POST['from'];//mail form
    $password = $_POST['password'];//password
    $to = $_POST['to'];//mail to
    $subject = "=?utf-8?b?" . base64_encode($_POST['title']) . "?=";//tilte mail
    $message = $_POST['message'];//content mail

    $mail = new PHPMailer;//create phpmailer
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';//stmp google
    $mail->Port = 587;//port number google
    $mail->SMTPSecure = 'tls';//encode tls

    $mail->SMTPAuth = true;
    $mail->Username = $email;
    $mail->Password = $password;
    $mail->addAddress($to);
    $mail->Subject = $subject;
    $mail->msgHTML($message);

    if (!$mail->send()) {
        echo $mail->ErrorInfo;
    } else {
        echo "Mail đã gửi!";
    }
} else {
    echo "Vui lòng nhập đúng thông tin";
}