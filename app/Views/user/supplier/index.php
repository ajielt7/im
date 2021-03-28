<?= $this->extend('templates/index'); ?>


<?= $this->section('content'); ?>

    <div class="container-fluid">

        <!-- Page Heading -->
        
        <div class="card shadow-sm mb-4" style="margin-top: -100px;" >
                        <div class="card-header py-3">
                          <div class="row mr-3">
                            <div class="col-lg-6">
                              <h3 class="col m-0 font-weight-bold text-primary">Data Supplier</h3>
                            </div>

                            <!-- <div class="col-lg-6"> -->
                              <a class="btn btn-primary ml-auto" href="/user/forminputsupplier" role="button">Tambah Data</a>
                            <!-- </div> -->

                          </div>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Supplier</th>
                                            <th>Alamat Supplier</th>
                                            <th>Nomor Telepon</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Supplier</th>
                                            <th>Alamat Supplier</th>
                                            <th>Nomor Telepon</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php $i=1; ?>
                                    <?php foreach ($supplier as $sup) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $sup['namasupplier'] ?></td>
                                            <td><?= $sup['alamatsupplier'] ?></td>
                                            <td><?= $sup['notelp'] ?></td>
                                        </tr>
                                     <?php endforeach; ?> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
        </div>

    </div>

<?= $this->endSection(); ?>