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
            <h6 class="m-0 font-weight-bold text-primary">Data Pengambilan / Pengebonan</h6>
          </div>
          <div class="card-body">
          <form action="/user/savebon" method="post">
          
          <div class="form-group">
            <input type="text" class="form-control <?= ($validation->hasError('barang_id')) ? 'is-invalid' : ''  ?>" name="barang_id" placeholder="Masukan ID Barang...">
            <div id="validationServer03Feedback" class="invalid-feedback">
              <?= $validation->getError('barang_id'); ?>
            </div>
          </div>

          <div class="form-group">
            <input type="text" class="form-control <?= ($validation->hasError('konsumen_id')) ? 'is-invalid' : ''  ?>" name="konsumen_id" placeholder="Masukan ID Konsumen...">
            <div id="validationServer03Feedback" class="invalid-feedback">
              <?= $validation->getError('konsumen_id'); ?>
            </div>
          </div>

          <div class="form-group">
            <input type="text" class="form-control <?= ($validation->hasError('jumlahkeluarbarang')) ? 'is-invalid' : ''  ?>" name="jumlahkeluarbarang" placeholder="Masukan Jumlah Barang...">
            <div id="validationServer03Feedback" class="invalid-feedback">
              <?= $validation->getError('jumlahkeluarbarang'); ?>
            </div>
          </div>
            
          <button type="submit" class="btn btn-primary">Submit</button>

        </form>
          </div>
        </div>

        

    </div>

<?= $this->endSection(); ?>