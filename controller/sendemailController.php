<?php

Class sendemailController Extends baseController {

    protected $email_info = array();
    protected $errors = array(
        'en' => array(
            'invalid_email' => 'Please enter a valid email address',
            'wrong_code' => 'You entered a wrong code',
            'fill_all' => 'Please fill in all form elements'
        ),
        'es' => array(
            'invalid_email' => 'Introduzca una dirección de correo electrónico válida.',
            'wrong_code' => 'código de seguridad es incorrecto',
            'fill_all' => 'rellene todos los elementos del formulario'
        ),
    );

    public function index() {
        $this->registry->template->success = false;
        if ($_POST) {
            if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['captcha']) &&
                    !empty($_POST['subject']) && !empty($_POST['message'])) {
                $this->email_info['name'] = strip_tags($_POST['name']);
                $this->email_info['subject'] = strip_tags($_POST['subject']);
                $this->email_info['message'] = strip_tags($_POST['message']);

                if (isset($_GET['lang']) && ($_GET['lang'] == 'es')) {
                    $errors = $this->errors['es'];
                } else {
                    $errors = $this->errors['en'];
                }

                $securimage = new Securimage();
                if (!Validation::email($_POST['email'])) {
                    $response = json_encode(array("operation" => 2, "error" => $errors['invalid_email']));
                } else if ($securimage->check($_POST['captcha']) == false) {
                    $response = json_encode(array("operation" => 2, "error" => $errors['wrong_code']));
                } else {
                    $this->email_info['email'] = $_POST['email'];
                    $this->send_email();
                    $response = json_encode(array("operation" => 1));
                }
                echo $response;
            } else {
                echo json_encode(array("operation" => 2, "error" => $errors['fill_all']));
            }
        }
    }

    protected function send_email() {
        $data = include SITE_DATA . '/contact/contact_info.php';

        $headers = "From: " . strip_tags('contact@romakerlaw.com') . "\r\n";
        $headers .= "Reply-To: " . strip_tags('no-reply@romakerlaw.com') . "\r\n";
        //$headers .= "CC: cpr@example.com\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        $subject = 'Romakerlaw.com ' . $this->email_info['subject'];
        $message = $data['header'];
        $message .= "\n<h4>NAME: " . $this->email_info['name'] . "<h4>";
        $message .= "\n<h4>EMAIL: " . $this->email_info['email'] . "<h4>";
        $message .= "\n<h4>MESSAGE: " . $this->email_info['message'] . "<h4>";

        foreach ($data['emails'] as $to) {
            mail($to, $subject, $message, $headers);
        }
    }

}
