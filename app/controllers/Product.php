<?php

/**
 * 
 */
class Product extends Controller{

	
	public function index($email=null){
		$data['judul'] = 'Produk';
		$data['produk'] = $this->model('Product_model')->getAllProduct();
		$data['kategori'] = $this->model('Category_model')->getAllCategory();
		$data['admin'] = $this->model('Admin_model')->getAdminByEmail($email);
		$this->view('templates/headeradmin', $data);
		$this->view('product/index', $data);
		$this->view('templates/footeradmin', $data);
	}

	public function pagetambah($email=null){
		$data['judul'] = 'Tambah Produk';
		$data['produk'] = $this->model('Product_model')->getAllProduct();
		$data['kategori'] = $this->model('Category_model')->getAllCategory();
		$data['admin'] = $this->model('Admin_model')->getAdminByEmail($email);
		$this->view('product/pagetambah', $data);
	}


	public function tambah(){
		$email = htmlspecialchars($_POST["email"]);
		$name = htmlspecialchars($_POST["name"]);
		$category = htmlspecialchars($_POST["category"]);
		$brand = htmlspecialchars($_POST["brand"]);
		$description = htmlspecialchars($_POST["description"]);
		$spesification = htmlspecialchars($_POST["spesification"]);
		$price = htmlspecialchars($_POST["price"]);

		$filename = $_FILES['picture']['name'];
		$size = $_FILES['picture']['size'];
		$error = $_FILES['picture']['error'];
		$tmpname = $_FILES['picture']['tmp_name'];

		if ($error === 4) {
			echo "
				<script>
					alert('Pilih gambar terlebih dahulu');
				</script>
			";
			return false;
		}


		$ekstensi = ['jpg', 'jpeg', 'png'];
		$ekstensipicture = explode('.', $filename);
		$ekstensipicture = strtolower(end($ekstensipicture));
		if (!in_array($ekstensipicture, $ekstensi)) {
			echo "
				<script>
					alert('Pastikan upload fpg/jpeg/png');
				</script>
			";
			return false;
		}

		$newfilename = uniqid();
		$newfilename .= '.';
		$newfilename .= $ekstensipicture;

		move_uploaded_file($tmpname, 'img/product/' .$newfilename);
		$picture = $newfilename;


		$data = [$name, $category, $brand, $description, $spesification, $price, $picture];


		if ($this->model('Product_model')->createProduct($data) > 0) {
			header('Location: ' . BASEURL . '/product/' . $email);
			exit;
		}

	}

	public function pageedit($id){
		$data['judul'] = 'Edit Produk';
		$data['produk'] = $this->model('Product_model')->getProductById($id);
		$data['kategori'] = $this->model('Category_model')->getAllCategory();
		$data['setkategori'] = $this->model('Category_model')->getCategoryById($data['produk']['category']);
		$this->view('product/pageedit', $data);
	}

	public function edit(){
		#var_dump($_POST); die();
		$id = htmlspecialchars($_POST["id"]);
		$name = htmlspecialchars($_POST["name"]);
		$category = htmlspecialchars($_POST["category"]);
		$brand = htmlspecialchars($_POST["brand"]);
		$description = htmlspecialchars($_POST["description"]);
		$spesification = htmlspecialchars($_POST["spesification"]);
		$price = htmlspecialchars($_POST["price"]);
		$oldpicture = htmlspecialchars($_POST["oldpicture"]);

		if($_FILES['picture']['error'] === 4){
			$picture = $oldpicture;
		}else{
			$filename = $_FILES['picture']['name'];
			$size = $_FILES['picture']['size'];
			$error = $_FILES['picture']['error'];
			$tmpname = $_FILES['picture']['tmp_name'];

			if ($error === 4) {
				echo "
					<script>
						alert('Pilih gambar terlebih dahulu');
					</script>
				";
				return false;
			}


			$ekstensi = ['jpg', 'jpeg', 'png'];
			$ekstensipicture = explode('.', $filename);
			$ekstensipicture = strtolower(end($ekstensipicture));
			if (!in_array($ekstensipicture, $ekstensi)) {
				echo "
					<script>
						alert('Pastikan upload fpg/jpeg/png');
					</script>
				";
				return false;
			}

			$newfilename = uniqid();
			$newfilename .= '.';
			$newfilename .= $ekstensipicture;

			move_uploaded_file($tmpname, 'img/product/' .$newfilename);
			$picture = $newfilename;
		}

		$data = [$id, $name, $category, $brand, $description, $spesification, $price, $picture];

		if ($this->model('Product_model')->updateProduct($data) > 0) {
			header('Location: ' . BASEURL . '/product');
			exit;
		}
	}

	public function deleteproduct($id){
		if ($this->model('Product_model')->deleteProductById($id) > 0) {
			header('Location: ' . BASEURL . '/product');
			exit;
		}
	}

}