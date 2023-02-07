<?php
    define('ROOT_URL','http://quanlysanpham.test/');
    define('ROOT_DIR', dirname(__FILE__) );
class Model{
    protected $conn;
    //phương thức
    public function __construct( ){
        $username   = 'root';
        $password   = '';
        $database   = 'duanm2';
        try {
            $this->conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
        } catch (Exception $e) {
            // echo $e->getMessage();
            echo '<h1>Khong the ket noi CSDL</h1>';
        }
    }
}