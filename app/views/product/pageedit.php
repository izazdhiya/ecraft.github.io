	<?php

    $category = $data['kategori'];
    $product = $data['produk'];

    ?>


<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Produk</title>
	<link rel="stylesheet" href="<?= BASEURL; ?>/css/styletambah.css">
	<link rel="icon" type="image/png" href="<?= BASEURL; ?>/img/favicon.ico">
</head>
<body>
	<div class="tambah">
		<h1>UBAH DATA PRODUK</h1>
		<form action="<?= BASEURL; ?>/product/edit" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?= $product["id"]; ?>">
			<input type="hidden" name="oldpicture" value="<?= $product["picture"]; ?>">
			<div class="mb-3">
				<label for="name" class="form-label">Nama Produk</label>
		  		<input type="text" class="form-control" id="name" name="name" required value="<?=$product['name']?>">
			</div>
			<div class="mb-3">
				<label for="category">Kategori</label>
				<select id="category" name="category" required>
					<?php $i = 1; ?>
					<?php foreach($category as $row) : ?>
						<?php if ($row["id"] == $product["category"]) : ?>
							<option value="<?=$row['id']?>" selected="selected"><?=$row['name']?></option>
						<?php else : ?>
							<option value="<?=$row['id']?>"><?=$row['name']?></option>
						<?php endif; ?>
					<?php $i++; ?>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="mb-3">
				<label for="brand" class="form-label">Brand</label>
		  		<input type="text" class="form-control" id="brand" name="brand" required value="<?=$product['brand']?>">
			</div>
			<div class="mb-3">
				<label for="description" class="form-label">Deskripsi</label>
				<textarea class="form-control" id="description" name="description" rows="3" required ><?=$product['description']?></textarea>
			</div>
			<div class="mb-3">
				<label for="spesification" class="form-label">Spesifikasi</label>
				<textarea class="form-control" id="spesification" name="spesification" rows="3" required><?=$product['spesification']?></textarea>
			</div>
			<div class="mb-3">
				<label for="price" class="form-label">Harga</label>
				<input type="number" class="form-control" id="price" name="price" required value="<?=$product['price']?>">
			</div>
			<div class="mb-3">
			    <label for="picture">Gambar Produk</label>
			    <div class="mb-3">
			    	<img src="<?= BASEURL; ?>/img/product/<?= $product["picture"]; ?>" style="width: 150px; height: 150px;" >
			    </div>
			    <input type="file" class="form-control-file" id="picture" name="picture">
			</div>

			<button type="submit" name="submit">Simpan</button>
		</form>
	</div>

</body>
</html>