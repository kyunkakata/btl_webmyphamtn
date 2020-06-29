<?php 
require_once('views/BaseView.php');
require_once('models/BaseModel.php');
class BaseController {
public $model;
public $view;
public function __construct(){
    $this->model = new BaseModel();
    $this->view = new BaseView();
}

public function Login(){
    return $this->view->Login();
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