<?= $this->extend('templates/index'); ?>


<?= $this->section('content'); ?>

    <div class="container-fluid">

        <!-- Page Heading -->

        <div class="card shadow-sm mb-4" style="margin-top: -100px;">
          <div class="card-header py-3">
          <div class="row">
            <h6 class="m-0 font-weight-bold text-primary">Data Pengambilan / Pengebonan</h6>
            <button type="submit" id="add" class="btn btn-primary ml-auto">Tambah Barang</button>
          </div>
          </div>
          <div class="card-body">
          
        <?php if(session()->getflashdata('pesan')) : ?>
          <div class="alert alert-success" role="alert">
             <?= session()->getflashdata('pesan'); ?>
          </div>
        <?php endif; ?>

          <form action="/user/savebarang" id='aksi' method="post">

          <div class="form-group">
            <input type="text" class="form-control <?= ($validation->hasError('namabarang')) ? 'is-invalid' : '' ?>" name="namabarang" placeholder="Masukan Nama Barang...">
            <div id="validationServer03Feedback" class="invalid-feedback">
              <?= $validation->getError('namabarang'); ?>
            </div>
          </div>
          
          <div class="form-group">
            <input type="text" class="form-control" name="nomorsuratjalan" placeholder="Masukan Nomor SJ...">
          </div>

          <div id="formbarang">
             <div class="form-inline">
                <div class="form-group">
                   <input type="hidden" id="id" name="id" value="">
                </div>
                <div class="form-group mx-sm-3 mb-2">
                  <input type="text" class="form-control <?= ($validation->hasError('supplier_id')) ? 'is-invalid' : '' ?>" name="supplier_id" id="supplier_id" placeholder="Masukan Nama Supplier...">
                  <div id="validationServer03Feedback" class="invalid-feedback">
                       <?= $validation->getError('supplier_id'); ?>
                  </div>
                </div>
                <button type="button" id="add" class="btn btn-primary mb-2">add</button>
             </div>
          </div>

          <div class="form-group">
            <input type="text" class="form-control <?= ($validation->hasError('kondisibarang')) ? 'is-invalid' : '' ?>" name="kondisibarang" placeholder="Masukan Kondisi Barang...">
            <div id="validationServer03Feedback" class="invalid-feedback">
              <?= $validation->getError('kondisibarang'); ?>
            </div>
          </div>

          <div class="form-group">
            <input type="text" class="form-control <?= ($validation->hasError('jumlahterima')) ? 'is-invalid' : '' ?>" name="jumlahterima" placeholder="Masukan Jumlah Penerimaan...">
            <div id="validationServer03Feedback" class="invalid-feedback">
              <?= $validation->getError('jumlahterima'); ?>
            </div>
          </div>

          <div class="form-group">
            <input type="text" class="form-control <?= ($validation->hasError('hargabarang')) ? 'is-invalid' : '' ?>" name="hargabarang" placeholder="Masukan Harga Barang...">
            <div id="validationServer03Feedback" class="invalid-feedback">
              <?= $validation->getError('hargabarang'); ?>
            </div>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" name="tanggalterima" placeholder="Masukan Tanggal Penerimaan...">
          </div> 

          <div class="row mr-3">
            <button type="submit" class="btn btn-primary ml-auto">Submit</button>
          </div>

          </form>

          </div>
        </div>

        
    </div>

<?= $this->endSection(); ?>