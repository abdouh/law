<?php

Class serviceController Extends baseController {

    protected $service = array();

    public function index() {
        $service_link = substr($_GET['rt'], strpos($_GET['rt'], 'service/') + 8);
        if (empty($service_link) || !$this->check_service_exists($service_link))
            header('Location: /error404');
        $this->registry->template->service = $this->prepare_service();
        $this->registry->template->link = READ_ONLY . '/';
        $this->registry->template->show('service');
    }

    protected function check_service_exists($link) {
        $services = include SITE_DATA . '/services/pages.php';
        foreach ($services as $index => $service) {
            if ($service['link'] == $link) {
                $this->service = $service;
                return true;
            }
        }
        return false;
    }

    protected function prepare_service() {
        $images = TEMPLATE_URL . '/site_data/services/images/';
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
