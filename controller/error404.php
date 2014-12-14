<?php

Class error404Controller Extends baseController {

    public function index() {
        $this->registry->template->title = 'This is the 404';
        $this->registry->template->link = READ_ONLY . '/';
        $this->registry->template->show('error404');
    }

}

?>
