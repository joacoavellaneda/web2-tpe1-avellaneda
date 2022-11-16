<?php
require_once 'app/models/product.model.php';
require_once 'app/views/product.view.php';
require_once 'app/helpers/auth.helper.php';
require_once "app/models/category.model.php";

 class ProductController{

    private $model;
    private $view;
    private $categorymodel;

  function __construct(){
      $this->model = new ProductModel();
      $this->view = new Productview();
      $this->helper= new AuthHelper();
      $this->categorymodel = new CategoryModel();

    }
  public function showProducts(){
        
        $log= $this->helper->checkLoggeIn();
        $products = $this->model->getAll();
        $categories = $this->categorymodel->getAll(); 
        $this->view->showProducts($products,$log,$categories);
         
    }
  public function addProducts() {
        session_start();
        // TODO: validar entrada de datos
        $name = $_POST['name'];
        $price = $_POST['price'];
        $color = $_POST['color'];
        $size = $_POST['size'];
        $description = $_POST['description'];
        $category = $_POST['categories'];
       if(empty($name)||empty($price)||empty($color)||empty($size)||empty($description)||empty($category)){
        $this->view->showError("Error when adding something empty.");
        die();

       }else{
        $this->model->insert($name, $price, $color, $size, $description, $category);
        
       //redirigimos al listado
       header("Location: " . BASE_URL );
       die();
       }
    }
    
   public function deleteProducts($id_products) {
        $this->model->deleteById($id_products);
        header("Location: " . BASE_URL);
        die();
   }

    public function updateProducts($id_products){
      session_start();
        //TODO : validar entrada de datos  
      $products = $this-> model-> getById($id_products);
      $categories = $this->categorymodel->getAll();      
      $this->view->editproduct($products,$categories);

    }

   public function updateProductForReal(){
        session_start();
        $id_products = (int)$_POST['id_products'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $color = $_POST['color'];
        $size = $_POST['size'];
        $description = $_POST['description'];
        $category = $_POST['categories'];
  
      if(empty($name)||empty($price)||empty($color)||empty($size)||empty($description)||empty($category)||empty($id_products)){
          $this->view->showError("Error when updating something empty.");
          die();
           
      }else{
        
        $this->model->editproduct($name, $price, $color, $size, $description, $category, $id_products);
        header("Location: " . BASE_URL. "products");
  
      }
     
    }

   public function showInfo($id_products){
      $products = $this->model->getProductsByInfo($id_products);
      $this->view->showinfo($products);
   }

   public function getProductCategory($id_category){
    $products = $this->model->getProductsByCategory($id_category); 
    $this->view->showProductsByCat($products);
    
   }

}
 