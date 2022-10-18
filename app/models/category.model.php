<?php
class CategoryModel{

    private $db;
    public function __construct(){
        $this->db =$this->getDB();
    }
  
    private function getDB() {
        
        $db = new PDO('mysql:host=localhost;'.'dbname=db_tpe;charset=utf8', 'root', '');
        return $db;
    }

    public function getById ($id_category) {
        $query = $this->db->prepare("SELECT * FROM  categories WHERE id_category =?;");
        $query->execute([$id_category]);
        $id_category = $query->fetch(PDO::FETCH_OBJ);
        
        return $id_category;
    }

    public function getAll() {
        $query = $this->db->prepare("SELECT * FROM categories");
        $query->execute();
        $categories = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $categories;
    }
    public function insert($category){
        $query = $this->db->prepare("INSERT INTO categories (category) VALUES (?)");
        $query->execute([$category]);

        return $this->db->lastInsertId();
    }

     
    public function deleteById($id_category){  
        $query =$this->db->prepare('DELETE FROM categories WHERE id_category = ?');
        $query->execute([$id_category]);
    }
    public function editcategory($id, $name){
        $query = $this ->db->prepare("UPDATE categories SET category = ? WHERE id_category = ?");
        try{
            $query -> execute(array($name,$id)); 
        }
        catch(PDOException $e){
        }

    

    }
  
   
      



}