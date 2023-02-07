<?php 
include_once "Model.php";
class Product extends Model {

    public function all(){
        $sql = "SELECT product.*,category.name as name_category FROM `product`
        JOIN `category` ON product.category_id =category.id";

        // Viet cau sql
        // $sql = "SELECT * FROM `product`";
        $stmt= $this->conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);//array
        $items = $stmt->fetchAll();
        $error = [];
        return $items;
    }
    public function find($id){
          //lay du lieu theo ID
          $sql = "SELECT * FROM `product` WHERE id = $id";
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
        $category_id = $data['category_id'];
        $price = $data['price'];
        $quantity = $data['quantity'];
        $description = $data['description'];
        $img = $_FILES['image']['name'];
        $tmp_img = $_FILES['image']['tmp_name'];
        $div = explode('.',$img);
        $file_ext = strtolower(end($div));
        $image= $div[0].time().'.'.$file_ext;
        $path_uploads="public/uploads/".$image;
        move_uploaded_file($tmp_img,$path_uploads);
        $status = $data['status'];
        if ($name == "") {
          $error['name'] = 'Vui Lòng Nhập Tên!';
        }
        if ($category_id == "") {
            $error['category_id'] = 'Vui Lòng Nhập Thể Loại!';
          }
        
          if ($price == "") {
            $error['price'] = 'Vui Lòng Nhập Số Tiền!';
          }
          if ($quantity == "") {
            $error['quantity'] = 'Vui Lòng Nhập Số Lượng!';
          }
          if ($description == "") {
            $error['description'] = 'Vui Lòng Nhập Mô Tả!';
          }
        
        $sql = "INSERT INTO `product` (`name`,`category_id`,`price`,`quantity`,`description`,`image`,`status`) 
         VALUES ('$name','$category_id','$price','$quantity','$description','$image','$status')";

        // in ra sql
            // var_dump($sql);
            // die();

        //Thuc hien truy van
        $this->conn->exec($sql);
    }
    public function update($id,$data){
        $name = $data['name'];
        $category_id = $data['category_id'];
        $price = $data['price'];
        $quantity = $data['quantity'];
        $description = $data['description'];
        $img = $_FILES['image']['name'];
        $tmp_img = $_FILES['image']['tmp_name'];
        $div = explode('.',$img);
        $file_ext = strtolower(end($div));
        $image= $div[0].time().'.'.$file_ext;
        $path_uploads="public/uploads/".$image;
        move_uploaded_file($tmp_img,$path_uploads);
        $status = $data['status'];
        $sql = "UPDATE `product` SET
        `name` = '$name',
        `category_id` = '$category_id',
        `price` = '$price',
         `quantity` = '$quantity',
         `description` = '$description',
         `image` = '$image',
         `status` = '$status'
          WHERE `product`.`id` = $id";
          //debug sql
        // var_dump($sql);
        // die();
          // thuc hien truy van
          $this->conn->exec($sql);
    }
    public function delete($id){
        $sql = "DELETE FROM product WHERE id = $id";
        //Debug sql
        // var_dump($sql);
        //Thuc hien truy van
        $this->conn->exec($sql);
    }
}