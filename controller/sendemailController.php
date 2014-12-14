<?php

Class sendemailController Extends baseController {

    protected $email_info = array();

    public function index() {
        $this->registry->template->success = false;
        if ($_POST) {
            if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['captcha']) &&
                    !empty($_POST['subject']) && !empty($_POST['message'])) {
                $this->email_info['name'] = strip_tags($_POST['name']);
                $this->email_info['subject'] = strip_tags($_POST['subject']);
                $this->email_info['message'] = strip_tags($_POST['message']);

                $securimage = new Securimage();

                if (!Validation::email($_POST['email'])) {
                    $response = json_encode(array("operation" => 2, "error" => "You must enter a valid email address"));
                } else if ($securimage->check($_POST['captcha']) == false) {
                    $response = json_encode(array("operation" => 2, "error" => "You entered a wrong code", 'code' => 1));
                } else {
                    $this->email_info['email'] = $_POST['email'];
                    $this->send_email();
                    $response = json_encode(array("operation" => 1));
                }
                echo $response;
            } else {
                echo json_encode(array("operation" => 2, "error" => "You must fill all form elements"));
            }
        }
    }

    protected function send_email() {
        $data = include SITE_DATA . '/contact/contact_info.php';

        $headers = "From: " . strip_tags('no-reply@romakerlaw.com') . "\r\n";
        $headers .= "Reply-To: " . strip_tags('no-reply@romakerlaw.com') . "\r\n";
        //$headers .= "CC: susan@example.com\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        $subject = 'From Romakerlaw.com ' . $this->email_info['subject'];
        $message = $data['header'];
        $message .= "\n<h4>NAME: " . $this->email_info['name'] . "<h4>";
        $message .= "\n<h4>EMAIL: " . $this->email_info['email'] . "<h4>";
        $message .= "\n<h4>MESSAGE: " . $this->email_info['message'] . "<h4>";

        foreach ($data['emails'] as $to) {
            mail($to, $subject, $message, $headers);
        }
    }

}
