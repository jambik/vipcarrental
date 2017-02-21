<?php

define('EMAIL_ADDRESS', 'jambik@gmail.com');

require __DIR__.'/vendor/autoload.php';

$response = null;
$errors   = null;

/* SEND CONTACT US FORM */
if (isset($_POST['form']) && $_POST['form'] == 'contactus') {

    $data['firstname'] = $_POST['first-name'];
    $data['lastname'] = $_POST['last-name'];
    $data['telephone'] = $_POST['telephone'];
    $data['email'] = $_POST['email'];
    $data['message'] = $_POST['message'];

    if (empty($data['firstname'])) {
        $errors[] = 'Please enter your name';
    }
    if (empty($data['email'])) {
        $errors[] = 'Please enter your email';
    }
    if (empty($data['message'])) {
        $errors[] = 'Please enter your message';
    }

    $mail = new PHPMailer();
    $mail->addAddress(EMAIL_ADDRESS);
    $mail->CharSet = 'utf-8';
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Contact us';

    $loader = new Twig_Loader_Filesystem('/');
    $twig = new Twig_Environment($loader);

    $mail->Body = $twig->render('email_contactus.tpl', ['data' => $data]);

    if ( ! $errors) {
        if (!$mail->send()) {
            $errors[] = 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            $response['result'] = 'success';
            $response['message'] = 'Message has been sent';
        }
    }
}

/* SEND CHECKOUT FORM */
if (isset($_POST['form']) && $_POST['form'] == 'checkout') {

    $data['car'] = $_POST['selected-car'];
    $data['pickup'] = $_POST['pick-up'];
    $data['dropoff'] = $_POST['drop-off'];
    $data['pickuplocation'] = $_POST['pickup-location'];
    $data['dropofflocation'] = $_POST['dropoff-location'];

    $data['firstname'] = $_POST['first-name'];
    $data['lastname'] = $_POST['last-name'];
    $data['phone'] = $_POST['phone-number'];
    $data['age'] = $_POST['age'];
    $data['email'] = $_POST['email-address'];
    $data['address'] = $_POST['address'];
    $data['city'] = $_POST['city'];
    $data['zip'] = $_POST['zip-code'];

    if (empty($data['firstname'])) {
        $errors[] = 'Please enter your name';
    }
    if (empty($data['email'])) {
        $errors[] = 'Please enter your email';
    }

    $mail = new PHPMailer();
    $mail->addAddress(EMAIL_ADDRESS);
    $mail->CharSet = 'utf-8';
    $mail->isHTML(true);
    $mail->Subject = 'Car Reservation';

    $loader = new Twig_Loader_Filesystem('/');
    $twig = new Twig_Environment($loader);

    $mail->Body = $twig->render('email_reservation.tpl', ['data' => $data]);

    if ( ! $errors) {
        if (!$mail->send()) {
            $errors[] = 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            $response['result'] = 'success';
            $response['message'] = 'Message has been sent';
        }
    }
}

// Make error text
if ($errors) {
    $response['result'] = 'error';
    foreach ($errors as $error) {
        $response['message'].= '<div>' . $error . '</div>';
    }
}

// Response
echo json_encode($response);