<?php
/**
 * Created by PhpStorm.
 * User: Lidia Freitas
 * Date: 19/09/2017
 * Time: 19:59
 */


if (empty($_POST['name']) || empty($_POST['password']) || empty($_POST['email'])) {
    header('location:register.php?msg=empty');
} else {
    include '../conn.php';

    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    // criptografar senha:
    $security = crypt($password, '');

    $sql = "INSERT INTO users (name, email, password, role)
	VALUES ('$name', '$email', '$security', '$role')";

    //mysqli_query($conn, $sql);

    if (!$conn->query($sql)) {
        $error = mysqli_error($conn);
        header('location:register.php?msg=duplicated&error='.$error);
    } else {
        $rows = mysqli_affected_rows($conn);
        if ($rows > 0) {
            include "../mail.php";
            require_once('../vendor/phpmailer/phpmailer/PHPMailerAutoload.php'); //chama a classe de onde você a colocou.
            $mail = new PHPMailer(); // instancia a classe PHPMailer

            $mail->IsSMTP();
            $mail->CharSet = 'UTF-8';

            //configuração do servidor remetente
            $mail->Port = '587'; //porta usada pelo email.
            $mail->Host = 'email-smtp.us-east-1.amazonaws.com'; //'smtp.email.com';
            $mail->IsHTML(true);
            $mail->Mailer = 'smtp';
            $mail->SMTPSecure = 'tls';

            //configuração do usuário remetente
            $mail->SMTPAuth = true;
            $mail->Username = $SMTP_Username;
            $mail->Password = $SMTP_Password;

            $mail->SingleTo = true;

            $mail->From = $MAIL_address_sender;
            $mail->FromName = "BooksApp";

            $mail->addAddress($MAIL_address_recipient); // email do destinatario.

            $mail->Subject = "Mensagem enviada pelo site www.booksApp.com.br";
            $mail->Body = "Um novo usuário se cadastrou no BooksApp. <br>
            <strong>Nome do usuário: </strong> {$name}<br>
            <strong>Email: </strong> {$email}";

            if ($mail->Send()) {
                header('location:login.php?msg=success');
            } else {
                header('location:login.php?msg=noemail');
            }
        } else {
            header('location:register.php?msg=error');
        }
    }
}