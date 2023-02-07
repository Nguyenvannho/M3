<?php 
include_once "Model.php";
class Category extends Model {

    public function all(){
        // Viet cau sql
        $sql = "SELECT * FROM `category`";
        $stmt= $this->conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);//array
        $items = $stmt->fetchAll();
        return $items;
    }
    public function find($id){
          //lay du lieu theo ID
          $sql = "SELECT * FROM `category` WHERE id = $id";
          //Debug sql
          // var_dump($sql);
          $stmt = $this->conn->query($sql);
          $stmt->setFetchMode(PDO::FETCH_ASSOC);//array
          //Lấy về dữ liệu duy nhat
          $row = $stmt->fetch();
          return $row;
    }
    public function save($data){
        // echo '<pre>';
        // print_r($data);
        // die();
        $name = $data['name'];
        $description = $data['description'];

        $sql = "INSERT INTO `category` (`name`,`description`)
         VALUES ('$name', '$description')";

        // in ra sql
        // var_dump($sql);
        // die();

        //Thuc hien truy van
        $this->conn->exec($sql);
    }
    public function update($id,$data){
        $name = $data['name'];
        $description = $data['description'];
        $sql = "UPDATE `category` SET
        `name` = '$name',
        `description` = '$description'
          WHERE `category`.`id` = $id";
          //debug sql

          // thuc hien truy van
          $this->conn->exec($sql);
    }
    public function delete($id){
        $sql = "DELETE FROM category WHERE id = $id";
        //Debug sql
        // var_dump($sql);
        //Thuc hien truy van
        $this->conn->exec($sql);
    }
}