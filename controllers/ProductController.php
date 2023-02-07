<?php 
include_once 'models/Product.php';
include_once 'models/Category.php';

class ProductController extends Controller {
    //Goi toi trang danh sach
    public function index() {
        // goi model
        $objProduct = new Product();
        //Model thao tac voi CSDL, tra ve controller
        $items = $objProduct->all();
     
        // goi toi trang them moi
        // Truyen du lieu xuong view

        include_once 'views/product/index.php';
    }
    public function create() {
        // goi view
       $objCategory = new Category();
        //Model thao tac voi CSDL, tra ve controller
        $items = $objCategory->all();
        include_once 'views/product/create.php';
    }
    // xu ly them moi
    public function store() {
        // echo '<pre>';
        // print_r($_REQUEST);
        // die();
        // lay du lieu tu _REQUEST gan vao mang data
        $data = [
            'name' => $_REQUEST['name'],
            'category_id'=> $_REQUEST['category_id'],
            'price'=> $_REQUEST['price'],
            'quantity' => $_REQUEST['quantity'],
            'description' => $_REQUEST['description'],
            'image' => $_REQUEST['image'],
            'status' => $_REQUEST['status']
        ];
        
        // goi modelx`
        // print_r($data);
        // echo "<pre>";
        // die();
        $objProduct = new Product();
        $objProduct->save($data);
        // die();
        // chuyen huong ve trang danh sach
        $this->redirect('index.php?controller=product&action=index');
    }
    // goi toi trang chinh sua
    public function edit(){
        $id = $_REQUEST['id'];
        // goi model
        $objProduct = new Product();
        $item = $objProduct->find($id);
        

        $objCategory = new Category();
        //Model thao tac voi CSDL, tra ve controller
        $category = $objCategory->all();
        // in du lieu ra
        // echo '<pre>';
        // print_r($item);
        // die();
       
        // truyen xuong view
        $params = [
           'item' => $item,
           'id' => $id,
           'category'=>$category
        ];

        $this->view('product/edit.php',$params);
    }
    public function update(){
        $id = $_REQUEST['id'];
        // goi model
        $objProduct = new Product();
        $item = $objProduct->find($id);
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $objProduct->update($id,$_REQUEST);
            $this->redirect('index.php?controller=product&action=index');

        }
    }

  //trang xóa
  public function destroy(){
    $id = $_REQUEST['id'];
    $objProduct = new Product();
    $objProduct->delete($id);
    $this->redirect('index.php?controller=product&action=index');
}
}