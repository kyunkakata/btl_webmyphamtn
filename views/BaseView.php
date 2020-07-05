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

	public function history_order($result){
		require "web/HistoryOrder.php";
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
