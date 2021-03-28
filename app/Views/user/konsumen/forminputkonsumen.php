<?= $this->extend('templates/index'); ?>


<?= $this->section('content'); ?>

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="card shadow mb-4" style="margin-top: -100px;">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Input Konsumen</h6>
          </div>
          <div class="card-body">
          
        <?php if(session()->getflashdata('pesan')) : ?>
          <div class="alert alert-success" role="alert">
             <?= session()->getflashdata('pesan'); ?>
          </div>
        <?php endif; ?>

          <form action="/user/savekonsumen" method="post">
          <div class="form-group">
            <label for="inputNamaKonsumen">ID Konsumen</label>
            <input type="text" class="form-control <?= ($validation->hasError('konsumenid')) ? 'is-invalid' : '' ;?>" name="konsumenid" placeholder="Masukan Identitas Konsumen...">
            <div id="validationServer03Feedback" class="invalid-feedback">
               <?= $validation->getError('konsumenid'); ?>
               </div>
          </div>
          <div class="form-group">
            <label for="inputNamaKonsumen">Nama Konsumen</label>
            <input type="text" class="form-control <?= ($validation->hasError('namakonsumen')) ? 'is-invalid' : '' ;?>" name="namakonsumen" placeholder="Masukan Nama Konsumen...">
            <div id="validationServer03Feedback" class="invalid-feedback">
               <?= $validation->getError('namakonsumen'); ?>
               </div>
         </div>
          
          <div class="form-group">
                      <label for="inputAlamatKonsumen">Alamat Konsumen</label>
                      <input type="text" class="form-control" name="alamatkonsumen" placeholder="Masukan Alamat Konsumen...">
            </div>
            <div class="form-group">
                        <label for="inputNamaKonsumen">Nomor HP Konsumen</label>
                        <input type="text" class="form-control" name="nohp" placeholder="Masukan NOMOR HP Konsumen...">
            </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          </form>

          </div>
        </div>

    </div>

<?= $this->endSection(); ?>