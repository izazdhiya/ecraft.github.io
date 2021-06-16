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

	public function aduan(){

		$nama = $_POST['nama'];
        $email = $_POST['email'];
        $judul = $_POST['judul'];
        $pesan = $_POST['pesan'];


        header('Location: https://api.whatsapp.com/send?phone=6282133371248&text=ECraft%0ANama%20:%20' . $nama . '%0AEmail%20:%20' . $email . '%0AJudul%20:%20' . $judul . '%0APesan%20:%20' . $pesan );
			exit;
	}
}