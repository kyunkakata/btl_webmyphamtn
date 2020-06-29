<?php 
class Database extends PDO
	{
		
		public function __construct($dsn, $user, $pass)
		{
			
			parent::__construct($dsn, $user, $pass);
		}
		public function select($sql, $data = array(), $fetchStyle = PDO::FETCH_ASSOC){
			$stmt = $this->prepare($sql);
			foreach($data as $key => $value){

				$stmt->bindParam($key,$value);

			}
			
			$stmt->execute();
			return $stmt->fetchAll($fetchStyle);
			
		}
		public function insert($table, $data){
			$keys = implode(",", array_keys($data));
			$values =":" .implode(', :', array_keys($data));
			$sql = "insert into $table($keys) values($values)";
			echo $sql;
			$stmt = $this->prepare($sql);
			foreach($data as $key => $value){

				$stmt->bindValue(":$key", $value);
				var_dump($stmt);

			}
			return $stmt->execute();
			}
		public function update($table, $data, $cond){
			$updateKeys = NULL;
			foreach($data as $key => $value){
				$updateKeys .= "$key=:$key,";
			}
			$updateKeys = rtrim($updateKeys, ',');
			$sql = "UPDATE $table set $updateKeys where $cond";
			$stmt = $this->prepare($sql);
			foreach($data as $key => $value){

				$stmt->bindValue(":$key", $value);

			}
			return $stmt->execute();

		}
		
		public function delete($table, $cond) {
			$sql = "DELETE FROM $table WHERE $cond;";
			$stmt = $this->prepare($sql);
			return $stmt->execute();
		}
	}


 ?>