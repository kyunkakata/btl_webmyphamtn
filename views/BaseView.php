<?php 
class BaseView {
	public function Login() {
		require "templates/Login/Login.php";

	}

	public function SignUp() {
		require "templates/SignUp/SignUp.php";
	}
	
	public function HomePage() {
		require "templates/HomePage/HomePage.php";
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
