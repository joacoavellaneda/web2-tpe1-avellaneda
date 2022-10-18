<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class SectionView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }

    

    function error404(){
        $this->smarty->display('error404.tpl');
    }

   
}