<?php 
require_once('models/BaseModel.php');
require_once('views/BaseView.php');
class BaseController {
public $model;
public $view;

public $TBL_PRODUCT = 'product';
public $TBL_CART = 'tbl_cart';
public $TBL_EXTRA_INFO_PRODUCT = 'extra_product_info';
public $TBL_ORDER = "tbl_order";
public $TBL_USER = 'user';

public function __construct(){
    $this->model = new BaseModel();
    $this->view = new BaseView();
}

public function login(){
    return $this->view->login();
    // $name = $_POST['Name'];
    // $password = $_POST['Password'];
    // $cond="`name`= '$name' AND `password` = '$password';";
    // var_dump($cond);
    // $result = $this->model->list_id('user', $cond);
    // $user_id = $result[0]['id'];
    // if(count($result) == 0){
       
    //    $this->redirect("http://localhost/btl_webmyphamtn/index.php?task=login?login_result=false");
    // } else {
    //     // dang nhap thanh cong
    //     // $this->redirect("index.php&user_id=$user_id");
    //     header("Location: index.php?task=index&user_id=$user_id");
    // }
    // var_dump($user_id);
}

public function action_login() {
    $name = $_POST['Name'];
    $password = $_POST['Password'];
    $cond="`name`= '$name' AND `password` = '$password';";
    var_dump($cond);
    $result = $this->model->list_id('user', $cond);
    $user_id = $result[0]['id'];
    if(count($result) == 0){
       header("Location: index.php?task=login&login_result=false");
    } else {
        // dang nhap thanh cong
        // $this->redirect("index.php&user_id=$user_id");
        header("Location: index.php?task=index&user_id=$user_id");
    }
}

public function redirect($target) {
    header("Location: http://localhost/btl_webmyphamtn/web/$target");
}

public function index() {
    $result = $this->model->list('product');
    return $this->view->index($result);
}


public function SignUp() {
    return $this->view->SignUp();
}

public function HomePage() {
    return $this->view->HomePage();
}

public function DetailProduct() {
    return $this->view->DetailProduct();
}

public function PaymentPage() {
    return $this->view->PaymentPage();
}

public function OrderList() {
    return $this->view->OrderList();
}

public function CartList() {
    return $this->view->CartList();
}

/**
 * Dang nhap vao he thong.
 * Neu la user thuong thi se chuyen toi man hinh trang chu.
 * Neu la admin thi se chuyen toi man hinh quan ly.
 */
public function doSignIn() {
    header('Location: ?task=HomePage');
}

/**
 * Dang ky vao he thong.
 * Dang ki xong chuyen toi man hinh dang nhap.
 */
public function doSignUp() {
    header('Location: ? task=LogIn');
}

/**
 * lay danh sach san pham dua theo cac truong thuoc tinh, 
 * value la gia tri so sanh
 * compare la phep so sanh: bao gom largerThan (lớn hơn), smallerThan (nhỏ hơn), equals(bằng với)
 */
public function getListProductBy($tag, $value, $compare){

}

/**
 * them san pham vao gio hang dua theo user_id
 */
public function addProductToCart($product, $user_id) {

}

/**
 * Xoa toan bo san pham trong gio hang dua theo user_id
 */
public function removeAllCart($user_id){

}

/**
 * Lay toan bo san pham trong gio hang dua theo user_id
 */
public function getProductByUserId($user_id){

}

/**
 * Tao ra list danh sach cac san pham can dat mua (dua vao ket qua chon loc tren UI va gio hang) 
 */
public function initPaymentListProduct($list_products) {

}
/**
 * Lay ra danh sach cac san pham da dat hang dua theo user_id
 */
public function getPaidListProductsByUserId($user_id){

}

/**
 * Lay ra danh sach toan bo cac san pham da dat hang.
 */
public function getPaidListProducts(){

}

public function alert($msg) {
    alert($msg);
}
// public function delete() {
// 	$table ='tbl_diachi';
// 	$id = $_GET['id'];
// 	var_dump($id);
// 	$cond="`id_diachi`=$id;";
// 	$this->model->delete($table,$cond);
// 	header('Location: ?task=list');
// }

}
 ?>