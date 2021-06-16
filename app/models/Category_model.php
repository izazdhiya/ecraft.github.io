<?php

/**
 * 
 */
class Category_model{

	private $table = 'category';
	private $db;

	public function __construct(){
		$this->db = new Database;
	}
	
	public function getAllCategory(){
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getCategoryById($id){
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id = :id');
		$this->db->bind('id', $id);
		return $this->db->single();
	}

}

?>