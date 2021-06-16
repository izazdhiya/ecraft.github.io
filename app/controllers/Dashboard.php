<?php

/**
 * 
 */
class Dashboard extends Controller{
	
	public function index($email=null){
		$data['judul'] = 'Dashboard';
		$data['produk'] = $this->model('Product_model')->getAllProduct();
		$data['kategori'] = $this->model('Category_model')->getAllCategory();
		$data['admintotal'] = $this->model('Admin_model')->getAllAdmin();
		$data['admin'] = $this->model('Admin_model')->getAdminByEmail($email);
		$this->view('templates/headeradmin', $data);
		$this->view('dashboard/index', $data);
		$this->view('templates/footeradmin', $data);
	}
}