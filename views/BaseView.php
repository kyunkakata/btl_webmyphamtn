<?php 
class BaseView {
	public function login() {
		require "web/login.php";
	}

	public function index($result) {
		require "web/index.php";
	}
	
	public function register() {
		require "web/register.php";
	}

	public function DetailProduct(){
		require "templates/DetailProduct/DetailProduct.php";
	}

	public function CartList() {
		require "templates/CartList/CartList.php";
	}

	public function OrderList() {
		require "templates/OrderList/OrderList.php";
	}

	public function PaymentPage() {
		require "templates/PaymentPage/PaymentPage.php";
	}

}

?>
