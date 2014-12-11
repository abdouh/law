<?php

Class indexController Extends baseController {

    public function index() {
        $this->registry->template->success = false;
        if ($_POST) {
            if (isset($_POST['site_pass']) && $_POST['site_pass'] == 'romaker7008') {
                $_SESSION['site_pass'] = 'romaker7008';
                $this->registry->template->success = true;
            } else {
                $this->registry->template->msg = 'Wrong Pass! Please try again';
            }
        } else if (isset($_SESSION['site_pass']) && $_SESSION['site_pass'] == 'romaker7008') {
            $this->registry->template->success = true;
        }


        $this->registry->template->show('index');
    }

}
