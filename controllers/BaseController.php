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
}

public function register(){
    return $this->view->register();
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
        header("Location: index.php?task=index&user_id=$user_id");
        setcookie('user_id',$user_id);
        setcookie('user_name', $result[0]['real_name']);
    }
}

public function action_logout() {
    setcookie('user_id','',time() - 1000);
    setcookie('user_name','',time() - 1000);
    header("Location: index.php?task=index");
}

public function action_register() {
    $error_msg = "";
    $real_name = $_POST['real_name'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $data = array(
        'real_name' => $real_name,
        'name' => $name,
        'address' => $address,
        'password' => $password,
        'phone_number' => $phone
    );
    $result = $this->model->add('user', $data);
    if(strlen($error_msg) > 0) {
        header("Location: index.php?task=login&login_result=false");
    } else {
        header("Location: index.php?task=login&signup_result=true");
    }
}

public function action_cashout() {

}

public function redirect($target) {
    header("Location: http://localhost/btl_webmyphamtn/web/$target");
}

public function index() {
    $cond = "1 ";
   
    if(isset($_GET['product_type'])) {
        $productType = $_GET['product_type'];
        $cond = $cond." AND `tags` = '$productType'";
    }

    if(isset($_GET['filter'])){
        $filterType = $_GET['filter'];
        if($filterType == 'price_asc') {
            $cond = $cond." GROUP BY `price` ASC";
        } else if ($filterType == 'price_desc') {
            $cond = $cond." GROUP BY `price` DESC";
        } else if ($filterType == 'best_seller') {
            $cond = $cond." AND `buy_times` >= 50";
        }
    }
    
    if(isset($_POST['search'])) {
        $searchField = $_POST['search'];
        if(strlen ($searchField) > 0){
            $cond = " `name` LIKE '%$searchField%';";
        }
    }
    var_dump($cond);

    $result = $this->model->list_id('product', $cond);
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