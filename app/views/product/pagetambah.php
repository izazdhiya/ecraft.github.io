	<?php

    $category = $data['kategori'];
    $admin = $data['admin'];

    ?>


<!DOCTYPE html>
<html>
<head>
	<title>Tambah Produk</title>
	<link rel="stylesheet" href="<?= BASEURL; ?>/css/styletambah.css">
	<link rel="icon" type="image/png" href="<?= BASEURL; ?>/img/favicon.ico">
</head>
<body>
	<div class="tambah">
		<h1>TAMBAH PRODUK</h1>
		<form action="<?= BASEURL; ?>/product/tambah" method="post" enctype="multipart/form-data">
			<input type="hidden" name="email" value="<?= $admin["email"]; ?>">
			<div class="mb-3">
				<label for="name" class="form-label">Nama Produk</label>
		  		<input type="text" class="form-control" id="name" name="name" required>
			</div>
			<div class="mb-3">
				<label for="category">Kategori</label>
				<select id="category" name="category" required>
					<?php $i = 1; ?>
					<?php foreach($category as $row) : ?>
					<option value="<?=$row['id']?>"><?=$row['name']?></option>
					<?php $i++; ?>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="mb-3">
				<label for="brand" class="form-label">Brand</label>
		  		<input type="text" class="form-control" id="brand" name="brand" required>
			</div>
			<div class="mb-3">
				<label for="description" class="form-label">Deskripsi</label>
				<textarea class="form-control" id="description" name="description" rows="3" required></textarea>
			</div>
			<div class="mb-3">
				<label for="spesification" class="form-label">Spesifikasi</label>
				<textarea class="form-control" id="spesification" name="spesification" rows="3" required></textarea>
			</div>
			<div class="mb-3">
				<label for="price" class="form-label">Harga</label>
				<input type="number" class="form-control" id="price" name="price" required>
			</div>
			<div class="mb-3">
			    <label for="picture">Gambar Produk</label>
			    <input type="file" class="form-control-file" id="picture" name="picture">
			</div>

			<button type="submit" name="submit">Tambah</button>
		</form>
	</div>

</body>
</html>