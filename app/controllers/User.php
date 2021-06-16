<?php

/**
 * 
 */
class User extends Controller{
	
	public function index($email=null){
		$data['judul'] = 'Profil';
		$data['admin'] = $this->model('Admin_model')->getAllAdmin();
		$data['admin'] = $this->model('Admin_model')->getAdminByEmail($email);
		$this->view('templates/headeradmin', $data);
		$this->view('user/index', $data);
		$this->view('templates/footeradmin', $data);
	}
}