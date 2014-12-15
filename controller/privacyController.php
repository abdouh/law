<?php

Class privacyController Extends baseController {

    protected $site_data = SITE_DATA;

    public function index() {
        $link = READ_ONLY . '/';
        if (isset($_GET['lang']) && ($_GET['lang'] == 'es')) {
            $this->site_data = SITE_DATA_ES;
            $this->site_data_read = 'site_data_es';
            $link = READ_ONLY . '/es/';
        }
        $this->registry->template->title = 'Privacy Policy';
        $this->registry->template->link = $link;
        $this->registry->template->privacy = $this->prepare_privacy();
        $this->registry->template->show('privacy');
    }

    protected function prepare_privacy() {
        return include $this->site_data . '/privacy_policy/content.php';
    }

}
