<?php 
include_once 'models/Customer.php';
class CustomerController extends Controller {
    //Goi toi trang danh sach
    public function index() {
        // goi model
        $objCustomer = new Customer();
        //Model thao tac voi CSDL, tra ve controller
        $items = $objCustomer->all();
        // goi toi trang them moi
        // Truyen du lieu xuong view
        include_once 'views/customer/index.php';
    }
    public function create() {
         // goi model
         $objCustomer = new Customer();
         //Model thao tac voi CSDL, tra ve controller
         $items = $objCustomer->all();
        // goi view
        include_once 'views/customer/create.php';
    }
    // xu ly them moi
    public function store() {
        // echo '<pre>';
        // print_r($_REQUEST);
        // die();
        // lay du lieu tu _REQUEST gan vao mang data
        $data = [
            'name' => $_REQUEST['name'],
            'address' => $_REQUEST['address'],
            'sex' => $_REQUEST['sex'],
            'phone' => $_REQUEST['phone'],
            'image' => $_REQUEST['image'],
            
        ];
        // goi model
        $objCustomer = new Customer();
        $objCustomer->save($data);
 
        // chuyen huong ve trang danh sach
        
        $this->redirect('index.php?controller=customer&action=index');
        }
    // goi toi trang chinh sua
    public function edit(){
        // goi model
        $objCustomer = new Customer();
        //Model thao tac voi CSDL, tra ve controller
        $items = $objCustomer->all();
        $id = $_REQUEST['id'];
        // goi model
        $objCustomer = new Customer();
        $item = $objCustomer->find($id);
        
        // in du lieu ra
        // echo '<pre>';
        // print_r($item);
        // die();
       
        // truyen xuong view
        include_once 'views/customer/edit.php';
    }
    public function update(){
        $id = $_REQUEST['id'];
        // goi model
        $objCustomer = new Customer();
        $item = $objCustomer->find($id);
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $objCustomer->update($id,$_REQUEST);
        $this->redirect('index.php?controller=customer&action=index');
        }
    }

  //trang xóa
  public function destroy(){
    $id = $_REQUEST['id'];
    $objCustomer = new Customer();
    $objCustomer->delete($id);
    $this->redirect('index.php?controller=customer&action=index');
}
}