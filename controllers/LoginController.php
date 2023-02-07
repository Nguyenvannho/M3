<?php 
include_once 'models/Login.php';
class LoginController extends Controller {
    //Goi toi trang danh sach
    public function index() {
        // goi model
        // $objLogin = new Login();
        //Model thao tac voi CSDL, tra ve controller
        // $items = $objLogin->all();
        // goi toi trang them moi
        // Truyen du lieu xuong view
        include_once 'views/logins/login.php';
    }
    
    public function login(){
       
    }
}