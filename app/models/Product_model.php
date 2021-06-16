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

	public function createProduct($data){
		$query = "INSERT INTO product VALUES('', :category, :brand, :name, :description, :spesification, :price, :picture)";

		#$quer = "INSERT INTO product VALUES('',$data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6])";

		#echo $quer;

		$this->db->query($query);
		$this->db->bind('category', $data[1]);
		$this->db->bind('brand', $data[2]);
		$this->db->bind('name', $data[0]);
		$this->db->bind('description', $data[3]);
		$this->db->bind('spesification', $data[4]);
		$this->db->bind('price', $data[5]);
		$this->db->bind('picture', $data[6]);


		$this->db->execute();

		return $this->db->rowCount();
	}

	public function updateProduct($data){
		$query = "UPDATE product SET category = :category, brand = :brand, name = :name, description = :description, spesification = :spesification, price = :price, picture = :picture WHERE id = :id";

		$this->db->query($query);
		$this->db->bind('id', $data[0]);
		$this->db->bind('category', $data[2]);
		$this->db->bind('brand', $data[3]);
		$this->db->bind('name', $data[1]);
		$this->db->bind('description', $data[4]);
		$this->db->bind('spesification', $data[5]);
		$this->db->bind('price', $data[6]);
		$this->db->bind('picture', $data[7]);


		$this->db->execute();

		return $this->db->rowCount();
	}

	public function deleteProductById($id){
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE id = :id');
		$this->db->bind('id', $id);
		$this->db->execute();

		return $this->db->rowCount();
	}

}

?>