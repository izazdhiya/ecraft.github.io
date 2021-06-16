    <?php

    $product = $data['produk'];
    $category = $data['kategori'];
    $admin = $data['admin'];
    

    ?>



      <div class="content">
        <div class="container-fluid">
          <div class="row">

            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <div class="row">
                    <div class="col-md-4">
                      <h4 class="card-title ">Produk E Craft</h4>
                      <p class="card-category"> Menampilkan semua produk</p>
                      <a href='<?= BASEURL; ?>/product/pagetambah/<?= $admin['email']; ?>' class="btn btn-success" >Tambah</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Brand</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                      </thead>
                      <tbody>
                      	<?php foreach($product as $row) : ?>
                        <tr>
                        	<td><?= $row["id"]; ?></td>
                        	<td><?= $row["name"]; ?></td>
                        	<td><?= $category[$row["category"]-1]['name']; ?></td>
                        	<td><?= $row["brand"]; ?></td>
                        	<td class="text-primary"><?= $row["price"]; ?></td>
                          <td>
                            <a href="<?= BASEURL; ?>/product/pageedit/<?= $row["id"]; ?>" class="edit"><i class="material-icons" title="Edit">&#xE254;</i></a>
                            <a href="<?= BASEURL; ?>/product/deleteproduct/<?= $row["id"]; ?>" class="delete" onclick="return confirm('Yakin Ingin Menghapus Data?');"><i class="material-icons" title="Delete">&#xE872;</i></a>
                          </td>
                        </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title mt-0"> Kategori </h4>
                  <p class="card-category"> Menampilkan semua Kategori</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class=" text-primary">
                        <th>ID</th>
                        <th>Nama</th>
                      </thead>
                      <tbody>
                        <?php foreach($category as $row) : ?>
                        <tr>
                        	<td><?= $row["id"]; ?></td>
                        	<td><?= $row["name"]; ?></td>
                        </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>