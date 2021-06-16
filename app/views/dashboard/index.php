    <?php

    $product = $data['produk'];
    $category = $data['kategori'];
    $admin = $data['admintotal'];


    ?>

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">inventory</i>
                  </div>
                  <p class="card-category">Produk</p>
                  <h3 class="card-title"><?= count($product); ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Last 24 Hours
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">category</i>
                  </div>
                  <p class="card-category">Kategori</p>
                  <h3 class="card-title"><?= count($category); ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Last 24 Hours
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">people</i>
                  </div>
                  <p class="card-category">Admin</p>
                  <h3 class="card-title"><?= count($admin); ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Last 24 Hours
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                  <h4 class="card-title">Produk E Craft</h4>
                  <p class="card-category">Menampilkan 3 produk terbaru</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                    </thead>
                    <tbody>
                      <?php for($x=0; $x < 3;$x++) : ?>
                        <tr>
                          <td><?= $product[$x]["id"]; ?></td>
                          <td><?= $product[$x]["name"]; ?></td>
                          <td><?= $category[$product[$x]["category"]-1]['name']; ?></td>
                          <td class="text-primary"><?= $product[$x]["price"]; ?></td>
                        </tr>
                      <?php endfor; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
                  
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Kategori</h4>
                  <p class="card-category">Menampilkan 3 kategori terbaru</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                        <th>ID</th>
                        <th>Nama</th>
                    </thead>
                    <tbody>
                      <?php for($x=0; $x < 3;$x++) : ?>
                        <tr>
                          <td><?= $category[$x]["id"]; ?></td>
                          <td><?= $category[$x]["name"]; ?></td>
                        </tr>
                      <?php endfor; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      