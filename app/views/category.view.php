<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class CategoryView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    public  function showCategory($categories,$log) {
        $this->smarty->assign('categories', $categories);
        $this->smarty->assign('log', $log);
        $this->smarty->display('templates/category/category.list.tpl');
      
    }
    
    public function editcategory($categories) {
        $this->smarty->assign("category", $categories);
        $this->smarty->display('templates/category/edit.form.category.tpl');
    }

    public function getCategorySelect ($categories) {
        $this->smarty->assign('categories', $categories);
        
    }
   
    public function showError($error = null) {
            $this->smarty->assign("error", $error);
            $this->smarty->display('error.tpl');
    }
}


