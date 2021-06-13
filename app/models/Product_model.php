<?php

/**
 * 
 */
class Product_model{

	private $table = 'product';
	private $db;

	public function __construct(){
		$this->db = new Database;
	}
	
	public function getAllProduct(){
		$this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY id DESC');
		return $this->db->resultSet();
	}

	public function getProductById($id){
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id = :id');
		$this->db->bind('id', $id);
		return $this->db->single();
	}

	public function getProductByCategory($category){
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE category = :category ORDER BY id DESC');
		$this->db->bind('category', $category);
		return $this->db->resultSet();
	}

}

?>