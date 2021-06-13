<?php

/**
 * 
 */
class Contact extends Controller{
	
	public function index(){
		$data['judul'] = 'Kontak';
		$data['kategori'] = $this->model('Category_model')->getAllCategory();
		$this->view('templates/header', $data);
		$this->view('contact/index');
		$this->view('templates/footer', $data);
	}
}