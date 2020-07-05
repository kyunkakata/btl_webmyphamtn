<?php 
require_once('Database.php');
require_once('Model.php');
class BaseModel extends Model{
	public function list($table){
		$query= "Select * from $table";
		return $this->db->select($query);
		
	}
	
	public function list_id($table,$cond){
		$query="Select * from $table where $cond";
		return $this->db->select($query);
	}
	public function add($table,$data){
		$this->db->insert($table,$data);
	}
	public function edit($table,$data,$cond){
		return $this->db->update($table,$data,$cond);
	}
	public function delete($table, $cond) {
		return $this->db->delete($table, $cond);
    }
    
    public function query($query){
        return $this->db->select($query);
    }
}