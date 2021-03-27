<?= $this->extend('templates/index'); ?>


<?= $this->section('content'); ?>

    <div class="container-fluid">

        <!-- Page Heading -->

        <?php if(session()->getflashdata('pesan')) : ?>
          <div class="alert alert-success" role="alert">
             <?= session()->getflashdata('pesan'); ?>
          </div>
        <?php endif; ?>

        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Input Pengebonan</h6>
          </div>
          <div class="card-body">
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

<?= $this->endSection(); ?>