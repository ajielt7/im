<?= $this->extend('templates/index'); ?>


<?= $this->section('content'); ?>

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Data Konsumen</h1>
        <a class="btn btn-primary" href="/user/forminputsupplier" role="button">Tambah Data</a>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama Konsumen</th>
              <th scope="col">Alamat Konsumen</th>
              <th scope="col">Nomor Handphone</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
          
          </tbody>
        </table>
    </div>

<?= $this->endSection(); ?>