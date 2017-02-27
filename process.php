<?php

define('EMAIL_ADDRESS', 'vipcarrentalbiz@gmail.com');

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

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->Username = 'vipcarrentalbiz@gmail.com';
    $mail->Password = 'dfvne1234f%';

    $mail->setFrom('vipcarrentalbiz@gmail.com', 'Vip Car|Rental');
    $mail->addAddress(EMAIL_ADDRESS);
    $mail->CharSet = 'utf-8';
    $mail->isHTML(true);
    $mail->Subject = 'Contact us';

    $loader = new Twig_Loader_Filesystem(__DIR__.'/email/');
    $twig = new Twig_Environment($loader);

    $mail->Body = $twig->render('contactus.tpl', ['data' => $data]);

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

    $data['orderid'] = $_POST['orderid'];

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
    $data['country'] = $_POST['country'];
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
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->Username = 'vipcarrentalbiz@gmail.com';
    $mail->Password = 'dfvne1234f%';

    $mail->setFrom('vipcarrentalbiz@gmail.com', 'Vip Car|Rental');
    $mail->addAddress(EMAIL_ADDRESS);
    $mail->CharSet = 'utf-8';
    $mail->isHTML(true);
    $mail->Subject = 'Car Reservation';

    $loader = new Twig_Loader_Filesystem(__DIR__.'/email/');
    $twig = new Twig_Environment($loader);

    $mail->Body = $twig->render('reservation.tpl', ['data' => $data]);

    if ( ! $errors) {
        // Write cars.json file
        $cars = json_decode(file_get_contents('cars.json'));
        foreach ($cars as $index => $car) {
            if ($car->name == $data['car']) {
                $cars->{$index}->date_expired = substr($data['dropoff'], 0, strpos($data['dropoff'], 'at')-1);
            }
        }
        file_put_contents('cars.json', json_encode($cars, JSON_PRETTY_PRINT));

        // Send email
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