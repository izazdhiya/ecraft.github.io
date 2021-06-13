<?php

/**
 * 
 */
class Home extends Controller{
	
	public function index(){
		$data['judul'] = 'Beranda';
		$data['produk'] = $this->model('Product_model')->getAllProduct();
		$data['kategori'] = $this->model('Category_model')->getAllCategory();
		$this->view('templates/header', $data);
		$this->view('home/index', $data);
		$this->view('templates/footer', $data);
	}
}