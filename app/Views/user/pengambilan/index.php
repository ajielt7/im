<?= $this->extend('templates/index'); ?>


<?= $this->section('content'); ?>

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="card shadow-sm mb-4" style="margin-top: -100px;">
                        <div class="card-header py-3">
                          <div class="row mr-3">
                            <div class="col-lg-6">
                              <h3 class="col m-0 font-weight-bold text-primary">Data Pengambulan Barang</h3>
                            </div>

                            <!-- <div class="col-lg-6"> -->
                              <a class="btn btn-primary ml-auto" href="/user/forminputbon" role="button">Tambah Data</a>
                            <!-- </div> -->

                          </div>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <?php if(session()->getflashdata('pesan')) : ?>
                               <div class="alert alert-success" role="alert">
                                    <?= session()->getflashdata('pesan'); ?>
                               </div>
                            <?php endif; ?>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Barang</th>
                                            <th>Keluar</th>
                                            <th>Kondisi</th>
                                            <th>Nama Konsumen</th>
                                            <th>Supplier</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Barang</th>
                                            <th>Keluar</th>
                                            <th>Kondisi</th>
                                            <th>Nama Konsumen</th>
                                            <th>Supplier</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php $i=1; ?>
                                    <?php foreach ($bon as $b) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $b->namabarang; ?></td>
                                            <td><?= $b->jumlahkeluarbarang; ?></td>
                                            <td><?= $b->kondisibarang; ?></td>
                                            <td><?= $b->namakonsumen; ?></td>
                                            <td><?= $b->namasupplier; ?></td>
                                            <td><a href="/user/delbon/<?= $b->bonid; ?>" class="btn btn-danger fas fa-trash-alt"></a></td>
                                        </tr>
                                     <?php endforeach; ?> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
        </div>
    </div>

<?= $this->endSection(); ?>