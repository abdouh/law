<?php

Class serviceController Extends baseController {

    protected $service = array();
    protected $site_data = SITE_DATA;
    protected $site_data_read = 'site_data';

    public function index() {
        $service_link = substr($_GET['rt'], strpos($_GET['rt'], 'service/') + 8);
        if (empty($service_link) || !$this->check_service_exists($service_link))
            header('Location: /error404');

        $link = READ_ONLY . '/';
        if (isset($_GET['lang']) && ($_GET['lang'] == 'es')) {
            $this->site_data = SITE_DATA_ES;
            $this->site_data_read = 'site_data_es';
            $link = READ_ONLY . '/es/';
        }

        $this->registry->template->title = $this->service['title'];
        $this->registry->template->service = $this->prepare_service();
        $this->registry->template->link = $link;
        $this->registry->template->show('service');
    }

    protected function check_service_exists($link) {
        $services = include $this->site_data . '/services/pages.php';
        foreach ($services as $index => $service) {
            if ($service['link'] == $link) {
                $this->service = $service;
                return true;
            }
        }
        return false;
    }

    protected function prepare_service() {
        $images = TEMPLATE_URL . "/{$this->site_data_read}/services/images/";
        $data = $this->service;
        $output = array();

        $data_content['image'] = $images . $data['image'];
        $data_content['title'] = $data['title'];
        $data_content['content'] = $data['content'];
        $output['content'] = Temp::get_template($data_content, 'service_content') . "\n";

        foreach ($data['service_section'] as $array) {
            $output['side'] .= Temp::get_template($array, 'bio_section') . "\n";
        }
        return $output;
    }

}
