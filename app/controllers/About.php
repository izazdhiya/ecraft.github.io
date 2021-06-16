<?php

/**
 * 
 */
class About extends Controller{
	public function index(){
		$data['judul'] = 'Tentang Kami';
		$data['kategori'] = $this->model('Category_model')->getAllCategory();
		$this->view('templates/header', $data);
		$this->view('about/index');
		$this->view('templates/footer', $data);
	}

}