<?php 
include_once 'models/Category.php';
class CategoryController extends Controller {
    //Goi toi trang danh sach
    public function index() {
        // goi model
        $objCategory = new Category();
        //Model thao tac voi CSDL, tra ve controller
        $items = $objCategory->all();
        // goi toi trang them moi
        // Truyen du lieu xuong view
        include_once 'views/category/index.php';
    }
    public function create() {
        // goi view
        include_once 'views/category/create.php';
    }
    // xu ly them moi
    public function store() {
        // echo '<pre>';
        // print_r($_REQUEST);
        // die();
        // lay du lieu tu _REQUEST gan vao mang data
        $data = [
            'name' => $_REQUEST['name'],
            'description' => $_REQUEST['description']
        ];
        // goi model
        $objCategory = new Category();
        $objCategory->save($data);
 
        // chuyen huong ve trang danh sach
    $this->redirect('index.php?controller=category&action=index');
    }
    // goi toi trang chinh sua
    public function edit(){
        $id = $_REQUEST['id'];
        // goi model
        $objCategory = new Category();
        $item = $objCategory->find($id);
        
        // in du lieu ra
        // echo '<pre>';
        // print_r($item);
        // die();
       
        // truyen xuong view
        include_once 'views/category/edit.php';
    }
    public function update(){
        $id = $_REQUEST['id'];
        // goi model
        $objCategory = new Category();
        $item = $objCategory->find($id);
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $objCategory->update($id,$_REQUEST);
            $this->redirect('index.php?controller=category&action=index');
        }
    }

  //trang xóa
  public function destroy(){
    $id = $_REQUEST['id'];
    $objCategory = new Category();
    $objCategory->delete($id);
    $this->redirect('index.php?controller=category&action=index');
}
    
}