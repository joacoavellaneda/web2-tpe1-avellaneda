<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class ProductView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    public function showProducts($products, $log,$categories) {

        $this->smarty->assign('categories', $categories);
        $this->smarty->assign('products', $products);
        $this->smarty->assign('log', $log);
        $this->smarty->display('templates/product/products.list.tpl');
    }
    public function editproduct($products,$categories) {

        $this->smarty->assign('categories', $categories);
        $this->smarty->assign("product", $products);
        $this->smarty->display('templates/product/edit.form.products.tpl');
        
    }
  
    public function showInfo($products) {
        
        $this->smarty->assign('product', $products);
        $this->smarty->display('templates/info.tpl');

       
    }
    public function showProductsByCat($products) {      

        $this->smarty->assign('products', $products);
        $this->smarty->display('templates/show.products.category.tpl');

       
    }
    public function showError($error = null) {

        $this->smarty->assign("error", $error);
        $this->smarty->display('error.tpl');
      }

}