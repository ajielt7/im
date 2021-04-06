<?= $this->extend('templates/index'); ?>


<?= $this->section('content'); ?>

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="card shadow-sm mb-4" style="margin-top: -100px;">
                        <div class="card-header py-3">
                          <div class="row mr-3">
                            <div class="col-lg-6">
                              <h3 class="col m-0 font-weight-bold text-primary">Data Barang</h3>
                            </div>

                            <!-- <div class="col-lg-6"> -->
                              <a class="btn btn-primary ml-auto" href="/user/forminputbarang" role="button">Tambah Data</a>
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
                                            <th>Nomor Surat Jalan</th>
                                            <th>Nama Supplier</th>
                                            <th>Kondisi Barang</th>
                                            <th>Jumlah Barang Diterima</th>
                                            <th>Harga Barang</th>
                                            <th>Tanggal Penerimaan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Barang</th>
                                            <th>Nomor Surat Jalan</th>
                                            <th>Nama Supplier</th>
                                            <th>Kondisi Barang</th>
                                            <th>Jumlah Barang Diterima</th>
                                            <th>Harga Barang</th>
                                            <th>Tanggal Penerimaan</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php $i=1; ?>
                                    <?php foreach ($barang as $bar) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $bar->namabarang; ?></td>
                                            <td><?= $bar->nomorsuratjalan; ?></td>
                                            <td><?= $bar->namasupplier; ?></td>
                                            <td><?= $bar->kondisibarang; ?></td>
                                            <td><?= $bar->jumlahterima; ?></td>
                                            <td><?= $bar->hargabarang; ?></td>
                                            <td><?= $bar->tanggalterima; ?></td>
                                            <td><a href="/user/delbar/<?= $bar->barid; ?>" class="btn btn-danger fas fa-trash-alt"></a></td>

                                        </tr>
                                     <?php endforeach; ?> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
        </div>
    </div>

<?= $this->endSection(); ?>