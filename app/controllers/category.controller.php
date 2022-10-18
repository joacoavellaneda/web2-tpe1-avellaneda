<?php
require_once "app/models/category.model.php";
require_once "app/views/category.view.php";
require_once 'app/helpers/auth.helper.php';

class CategoryController{

    
    private $model;
    private $view;

    function __construct(){
      $this->model = new CategoryModel();
      $this->view = new CategoryView();
      $this->helper= new AuthHelper();
      
    }


   public function showCategory(){  
        $log = $this->helper->checkLoggeIn();
        $categories = $this->model->getAll();
         $this->view->showCategory($categories, $log);
    }
    
    
        
    public function addCategory(){

      if( empty($_POST['category'])) {
        $this->view->showError("Error when uploading something empty.");
       die();

      }else {
        
      $categories = $_POST['category'];
      $this->model->insert($categories);
      header("Location: " . BASE_URL."categories"); 
      return;

    }
    
  }
    public function deleteCategory($id_category) {
        $this->model->deleteById($id_category);
        header("Location: " . BASE_URL ."categories"); 
    }

   
     
    public function updateCategory ($id_category) {
        $categories = $this-> model-> getById($id_category);
        $this-> view-> editcategory($categories);
    }
    
    public function updateCategoryForReal(){

      $id = (int)$_POST['id_category'];
      $name = $_POST['category'];
      if( empty ($id)||empty ($name) ){
        $this->view->showError("Error when updating something empty.");
        die();

      }else{
        $this->model->editcategory($id,$name);
      header("Location: " . BASE_URL. "categories");
      return;
    
      }
      
    }
    
}