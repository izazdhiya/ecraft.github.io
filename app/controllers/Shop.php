<?php

/**
 * 
 */
class Shop extends Controller{
	
	public function index($category=null){
		$data['judul'] = 'Toko';
		if (is_null($category)) {
			$data['produk'] = $this->model('Product_model')->getAllProduct();
		}else{
			$data['produk'] = $this->model('Product_model')->getProductByCategory($category);
		}
		$data['kategori'] = $this->model('Category_model')->getAllCategory();
		$this->view('templates/header', $data);
		$this->view('shop/index', $data);
		$this->view('templates/footer', $data);
	}

	public function detail($id){
		$data['judul'] = 'Produk';
		$data['produk'] = $this->model('Product_model')->getProductById($id);
		$data['kategori'] = $this->model('Category_model')->getAllCategory();
		$data['setkategori'] = $this->model('Category_model')->getCategoryById($data['produk']['category']);
		$this->view('templates/header', $data);
		$this->view('shop/detail', $data);
		$this->view('templates/footer', $data);
	}
}