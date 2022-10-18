<?php

require_once './app/views/section.view.php';

class SectionController {

    private $view;

    public function __construct() {

        $this->view = new SectionView();
    }

    

    function Error404() {
        $this->view->Error404();
    }
}