<?= $this->extend('templates/index'); ?>


<?= $this->section('content'); ?>

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Input Pengebonan</h1>

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

<?= $this->endSection(); ?>