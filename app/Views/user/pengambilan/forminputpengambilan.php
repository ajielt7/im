<?= $this->extend('templates/index'); ?>


<?= $this->section('content'); ?>

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Data Pengambilan / Pengebonan</h1>
        
        <form action="/user/savebon" method="post">
          
          <div class="form-group">
            <label for="inputNamaSupplier">Nama Supplier</label>
            <input type="text" class="form-control" name="namasupplier" placeholder="Masukan Nama Supplier...">
          </div>
          
          <div class="form-group">
                      <label for="inputIDBarang">ID Barang</label>
                      <input type="text" class="form-control" name="barang_id" placeholder="Masukan ID Barang...">
            </div>
            <div class="form-group">
                        <label for="inputIDKonsumen">ID Konsumen</label>
                        <input type="text" class="form-control" name="konsumen_id" placeholder="Masukan ID Konsumen...">
            </div>
            <div class="form-group">
                        <label for="inputJumlahBarang">Jumlah Barang</label>
                        <input type="text" class="form-control" name="jumlahkeluarbarang" placeholder="Masukan Jumlah Barang...">
            </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

<?= $this->endSection(); ?>