<?= $this->extend('templates/index'); ?>


<?= $this->section('content'); ?>

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="card shadow-sm mb-4" style="margin-top: -100px;">
                        <div class="card-header py-3">
                          <div class="row mr-3">
                            <div class="col-lg-6">
                              <h3 class="col m-0 font-weight-bold text-primary">Data Konsumen</h3>
                            </div>

                            <!-- <div class="col-lg-6"> -->
                              <a class="btn btn-primary ml-auto" href="/user/forminputkonsumen" role="button">Tambah Data</a>
                            <!-- </div> -->

                          </div>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>Nomor ID Konsumen</th>
                                            <th>Alamat</th>
                                            <th>Nomor Hp /WA</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>Nomor ID Konsumen</th>
                                            <th>Alamat</th>
                                            <th>Nomor Hp /WA</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php $i=1; ?>
                                    <?php foreach ($konsumen as $kon) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $kon['namakonsumen'] ?></td>
                                            <td><?= $kon['konsumenid'] ?></td>
                                            <td><?= $kon['alamatkonsumen'] ?></td>
                                            <td><?= $kon['nohp'] ?></td>
                                        </tr>
                                     <?php endforeach; ?>   
                                    </tbody>
                                </table>
                            </div>
                        </div>
        </div>
    </div>

<?= $this->endSection(); ?>