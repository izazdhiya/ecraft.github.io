
      <?php

      $admin = $data['admin'];

      ?>

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Profile</h4>
                  <p class="card-category">Admin E Craft</p>
                </div>
                <div class="card-body">
                  <form>
                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="name" class="bmd-label-floating">Nama</label>
                          <input id="name" name="name" type="text" class="form-control" value="<?= $admin['name']; ?>" disabled>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="email" class="bmd-label-floating">Email</label>
                          <input id="email" name="email" type="text" class="form-control" value="<?= $admin['email']; ?>" disabled>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="password" class="bmd-label-floating">Password</label>
                          <input id="password" name="password" type="password" class="form-control" value="<?= $admin['password']; ?>" disabled>
                        </div>
                      </div>
                    </div>
                    
                    
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="javascript:;">
                    <img class="img" src="<?= BASEURL; ?>/img/admin/fiesta.png" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">Admin</h6>
                  <h4 class="card-title"><?= $admin['name']; ?></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>