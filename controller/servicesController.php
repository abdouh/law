<?php

Class servicesController Extends baseController {

    protected $email_info = array();

    public function index() {
        $this->registry->template->success = false;
        $this->registry->template->show('single');
    }

}
