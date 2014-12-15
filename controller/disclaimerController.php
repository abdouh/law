<?php

Class disclaimerController Extends baseController {

    protected $site_data = SITE_DATA;

    public function index() {

        $link = READ_ONLY . '/';
        if (isset($_GET['lang']) && ($_GET['lang'] == 'es')) {
            $this->site_data = SITE_DATA_ES;
            $link = READ_ONLY . '/es/';
        }

        $this->registry->template->title = 'Legal Disclaimer';
        $this->registry->template->link = $link;
        $this->registry->template->disclaimer = $this->prepare_disclaimer();
        $this->registry->template->show('disclaimer');
    }

    protected function prepare_disclaimer() {
        return include $this->site_data . '/legal_disclaimer/content.php';
    }

}
