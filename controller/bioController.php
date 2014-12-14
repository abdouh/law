<?php

Class bioController Extends baseController {

    protected $bio = array();
    protected $site_data = SITE_DATA;
    protected $site_data_read = 'site_data';

    public function index() {
        $bio_link = substr($_GET['rt'], strpos($_GET['rt'], 'bio/') + 4);
        if (empty($bio_link) || !$this->check_bio_exists($bio_link))
            header('Location: /error404');

        if (isset($_GET['lang']) && ($_GET['lang'] == 'es')) {
            $this->site_data = SITE_DATA_ES;
            $this->site_data_read = 'site_data_es';
        }
        $this->registry->template->title = $this->bio['title'];
        $this->registry->template->bio = $this->prepare_bio();
        $this->registry->template->link = READ_ONLY . '/';
        $this->registry->template->show('bio');
    }

    protected function check_bio_exists($link) {
        $bios = include $this->site_data . '/attorneys/bios.php';
        foreach ($bios as $index => $bio) {
            if ($bio['link'] == $link) {
                $this->bio = $bio;
                return true;
            }
        }
        return false;
    }

    protected function prepare_bio() {
        $images = TEMPLATE_URL . "/{$this->site_data_read}/attorneys/images/";
        $data = $this->bio;
        $output = array();

        $data_head['image'] = $images . $data['image'];
        $data_head['head_content'] = $data['head_content'];
        $output['head'] = Temp::get_template($data_head, 'bio_head') . "\n";

        $data_content['main_content'] = $data['main_content'];
        $output['content'] = Temp::get_template($data_content, 'bio_content') . "\n";


        foreach ($data['bio_section'] as $array) {
            $output['side'] .= Temp::get_template($array, 'bio_section') . "\n";
        }
        return $output;
    }

}
