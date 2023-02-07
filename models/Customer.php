<?php 
include_once "Model.php";
class Customer extends Model {

    public function all(){
        // Viet cau sql
        $sql = "SELECT * FROM `customer`";
        $stmt= $this->conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);//array
        $items = $stmt->fetchAll();
        return $items;
    }
    public function find($id){
          //lay du lieu theo ID
          $sql = "SELECT * FROM `customer` WHERE id = $id";
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
        $address = $data['address'];
        $sex = $data['sex'];
        $phone = $data['phone'];
        $img = $_FILES['image']['name'];
        $tmp_img = $_FILES['image']['tmp_name'];
        $div = explode('.',$img);
        $file_ext = strtolower(end($div));
        $image= $div[0].time().'.'.$file_ext;
        $path_uploads="public/uploads/".$image;
        move_uploaded_file($tmp_img,$path_uploads);

        $sql = "INSERT INTO `customer` (`name`,`address`,`sex`,`phone`,`image`)
         VALUES ('$name', '$address','$sex','$phone','$image')";

        // in ra sql
        // var_dump($sql);
        // die();

        //Thuc hien truy van
        $this->conn->exec($sql);
    }
    public function update($id,$data){
        $name = $data['name'];
        $address = $data['address'];
        $sex = $data['sex'];
        $phone = $data['phone'];
        $img = $_FILES['image']['name'];
        $tmp_img = $_FILES['image']['tmp_name'];
        $div = explode('.',$img);
        $file_ext = strtolower(end($div));
        $image= $div[0].time().'.'.$file_ext;
        $path_uploads="public/uploads/".$image;
        move_uploaded_file($tmp_img,$path_uploads);
        $sql = "UPDATE `customer` SET
        `name` = '$name',
        `address` = '$address',
        `sex` = '$sex',
        `phone` = '$phone',
        `image` = '$image'
          WHERE `customer`.`id` = $id";
          //debug sql

          // thuc hien truy van
          $this->conn->exec($sql);
    }
    public function delete($id){
        $sql = "DELETE FROM customer WHERE id = $id";
        //Debug sql
        // var_dump($sql);
        //Thuc hien truy van
        $this->conn->exec($sql);
    }
}