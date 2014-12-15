<?php

Class error404Controller Extends baseController {

    public function index() {
        $link = READ_ONLY . '/';
        if (isset($_GET['lang']) && ($_GET['lang'] == 'es')) {
            $link = READ_ONLY . '/es/';
        }

        $this->registry->template->title = 'This is the 404';
        $this->registry->template->link = $link;
        $this->registry->template->show('error404');
    }

}

?>
