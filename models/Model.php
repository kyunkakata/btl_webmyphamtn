<?php class Model
	{
		public $db = array();
		
		public function __construct()
		{
			$dsn = 'mysql:dbname=ql_nhansu;host=localhost;charset=utf8';
			$user = 'root';
			$pass = '';
			$this->db = new Database($dsn, $user, $pass);
		}
	}
?>