<?= $this->extend('templates/index'); ?>


<?= $this->section('content'); ?>

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Data Pengambilan / Pengebonan</h1>
        
        <form action="/user/savekonsumen" method="post">
          
          <div class="form-group">
            <label for="inputNamaKonsumen">ID Konsumen</label>
            <input type="text" class="form-control" name="konsumenid" placeholder="Masukan Identitas Konsumen...">
          </div>
          <div class="form-group">
            <label for="inputNamaKonsumen">Nama Konsumen</label>
            <input type="text" class="form-control" name="namakonsumen" placeholder="Masukan Nama Konsumen...">
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

<?= $this->endSection(); ?>