<?php

require_once 'app/controllers/product.controller.php';
require_once 'app/controllers/category.controller.php';
require_once 'app/controllers/auth.controller.php';


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');



// acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}else{
    $action ='products';
}
// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);





// tabla de ruteo
switch ($params[0]) {
    
    case 'login':
        $authController = new AuthController();
        $authController->showFormLogin();
        break;
    case 'validate':
        $authController = new AuthController();
        $authController->validateUser();
        break;

    case 'logout':
        $authController = new AuthController();
        $authController->logout();
        break;

        
   
    case 'products':
        $productController = new ProductController();
        
        $productController->showProducts();
        break;
  
    case 'addproduct':
        $productController = new ProductController();
        
        $productController->addProducts();
        break;
    case 'deleteproduct':
        $productController = new ProductController();
        // obtengo el parametro de la acción
        $id = $params[1];
        $productController->deleteProducts($id);
        break;

    case 'showbycat':
        $productController = new ProductController();
        $id_category = $params[1];
        $productController->getProductCategory($id_category);
         break; 
    

    case 'updateproduct';
        $productController = new ProductController();
        $productController->updateProducts($params[1]);
        break;
    case 'editproductfinal';
        $productController = new ProductController();
        $productController->updateProductForReal();
        break;
    case 'categories':
        $categoryController = new CategoryController();
        $categoryController->showCategory();
        break;
    case 'info';
        $productController = new ProductController();
        $productController->showInfo($params[1]);
        break;

    case 'add':
        $categoryController = new CategoryController();
        $categoryController->addCategory();
        break;
    case 'delete':
        // obtengo el parametro de la acción
        $categoryController = new CategoryController();
        $id = $params[1];
        $categoryController->deleteCategory($id);
        break;

    case 'update':
        $categoryController = new CategoryController();
        $id_category = $params[1];
        $categoryController->updateCategory($id_category);
        break; 
    case 'updateCategoria':
        $categoryController = new CategoryController();
        $categoryController->updateCategoryForReal();
        break;
        
         
    default:


        header("HTTP/1.1 404 Not Found");
        echo('404 Page not found');
        break;
}
