<?= $this->extend('templates/index'); ?>


<?= $this->section('content'); ?>

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Data Supplier</h1>
        <a class="btn btn-primary" href="/user/forminputsupplier" role="button">Tambah Data</a>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama Supplier</th>
              <th scope="col">Alamat Supplier</th>
              <th scope="col">Nomor Telepn</th>
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