<?php

/**
 * 
 */
class Login extends Controller{
	public function index(){
		session_start();

		if (isset($_SESSION["login"])) {
			header('Location: ' . BASEURL . '/dashboard');
			exit;
		}
		$data['judul'] = 'Login';
		$this->view('login/index', $data);
	}

	public function cek(){
		$email = $_POST["email"];
		$password = $_POST["password"];

		$data['admin'] = $this->model('Admin_model')->getAdminByEmail($email);

		$admin = $data['admin'];
		if ($password === $admin["password"]) {

			session_start();

			$_SESSION["login"] = true;


			header('Location: ' . BASEURL . '/dashboard/' . $admin['email']);
			exit;

		}else{
			header('Location: ' . BASEURL . '/login');
			exit;
		}
			

	}

	public function logout(){
		session_start();
		$_SESSION = [];
		session_unset();
		session_destroy();

		header('Location: ' . BASEURL . '/login');
		exit;
	}


}