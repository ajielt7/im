<?= $this->extend('templates/index'); ?>


<?= $this->section('content'); ?>

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Data Pengambilan / Pengebonan</h1>
        
        <form action="/user/savebarang" method="post">
          
          <div class="form-group">
            <label for="inputNamaSupplier">Nama Supplier</label>
            <input type="text" class="form-control" name="namabarang" placeholder="Masukan Nama Supplier...">
          </div>
          
            <div class="form-group">
                      <input type="text" class="form-control" name="nomorsuratjalan" placeholder="Masukan Alamat Supplier...">
            </div>
            
            <div class="form-group">
                       <input type="text" class="form-control" name="supplier_id" placeholder="Masukan Nama Supplier...">
            </div>
            <div class="form-group">
                        <input type="text" class="form-control" name="kondisibarang" placeholder="Masukan Kondisi Barang...">
            </div>
            <div class="form-group">
                        <input type="text" class="form-control" name="jumlahterima" placeholder="Masukan Jumlah Penerimaan...">
            </div>
            <div class="form-group">
                        <input type="text" class="form-control" name="hargabarang" placeholder="Masukan Harga Barang...">
            </div>            
            <div class="form-group">
                       <input type="text" class="form-control" name="tanggalterima" placeholder="Masukan Tanggal Penerimaan...">
            </div>            
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

<?= $this->endSection(); ?>