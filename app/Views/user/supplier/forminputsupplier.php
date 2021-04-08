<?= $this->extend('templates/index'); ?>


<?= $this->section('content'); ?>

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">

          <div class="col-lg-8">
            <div class="card shadow-sm mb-4" style="margin-top: -100px;">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Input Pengebonan</h6>
              </div>
              <div class="card-body">
                                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Supplier</th>
                                            <th>Alamat Supplier</th>
                                            <th>Nomor Telepon</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Supplier</th>
                                            <th>Alamat Supplier</th>
                                            <th>Nomor Telepon</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php $i=1; ?>
                                    <?php foreach ($supplier as $sup) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $sup['namasupplier'] ?></td>
                                            <td><?= $sup['alamatsupplier'] ?></td>
                                            <td><?= $sup['notelp'] ?></td>
                                            <td><a href="/user/delsup/<?= $sup['id']; ?>" class="btn btn-danger fas fa-trash-alt"></a></td>
                                        </tr>
                                     <?php endforeach; ?> 
                                    </tbody>
                                </table>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card shadow-sm mb-4" style="margin-top: -100px;">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Input Pengebonan</h6>
              </div>
            <div class="card-body">

              <?php if(session()->getflashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                  <?= session()->getflashdata('pesan'); ?>
                </div>
              <?php endif; ?>

              <form action="/user/savesupplier" method="post">
                <div class="form-group">
                  <label for="inputNamaSupplier">Nama Supplier</label>
                  <input type="text" class="form-control <?= ($validation->hasError('namasupplier')) ? 'is-invalid' : '' ;?>" name="namasupplier" placeholder="Masukan Nama Supplier...">
                  <div id="validationServer03Feedback" class="invalid-feedback">
                    <?= $validation->getError('namasupplier'); ?>
                  </div>
                </div>
          
                <div class="form-group">
                  <label for="inputAlamatSupplier">Alamat Supplier</label>
                  <input type="text" class="form-control" name="alamatsupplier" placeholder="Masukan Alamat Supplier...">
                </div>

                <div class="form-group">
                  <label for="inputNamaSupplier">Nomor telepon Supplier</label>
                  <input type="text" class="form-control" name="notelp" placeholder="Masukan NOMOR Telepon Supplier...">
               </div>

               <button type="submit" class="btn btn-primary">Submit</button>

              </form>
            </div>
          </div>
        </div>
    </div>

<?= $this->endSection(); ?>