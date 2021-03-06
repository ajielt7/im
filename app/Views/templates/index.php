<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url();?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url();?>/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles jquery autocomplate-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?= $this->include('templates/sidebar'); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?= $this->include('templates/topbar'); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <?= $this->renderSection('content'); ?>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url("logout"); ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url();?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url();?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url();?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url();?>/js/sb-admin-2.min.js"></script>

    <!-- scrip jquery autocomplate-->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#supplier_id" ).autocomplete({
                 source: "/user/getSupplier",
                 select: function(event, data){
                     $('#id').val(data.item.id);
                 }
            });
        } );
        $( function() {
            $( "#barang_id" ).autocomplete({
                 source: "/user/getBarang",
                 select: function(event, data){
                     $('#barid').val(data.item.id);
                 }
            });
        } );
        $( function() {
            $( "#konsumen_id" ).autocomplete({
                 source: "/user/getKonsumen",
                 select: function(event, data){
                     $('#konid').val(data.item.id);
                 }
            });
        } );

        $(document).ready(function(){
            let tb = '<section class="form-inline mb-1">'
                    tb +='<div class="form-group mx-sm-3 mb-2">'
                        tb +='<input type="text" class="form-control" name="namabarang[]" id="namabarang" placeholder="Nama Barang...">'
                        tb +='<div id="validationServer03Feedback" class="invalid-feedback">'
                               
                        tb +='</div>'
                    tb +='</div>'
                    tb +='<div class="form-group mx-sm-3 mb-2">'
                        tb +='<input type="text" class="form-control" name="kondisibarang[]" placeholder="Kondisi Barang...">'
                        tb +='<div id="validationServer03Feedback" class="invalid-feedback">'
                           
                        tb +='</div>'
                    tb +='</div>'
                    tb +='<div class="form-group mx-sm-3 mb-2">'
                        tb +='<input type="text" class="form-contro" name="jumlahterima[]" placeholder="jumlah Barang...">'
                        tb +='<div id="validationServer03Feedback" class="invalid-feedback">'
                           
                        tb +='</div>'
                    tb +='</div>'
                    tb +='<div class="form-group mx-sm-3 mb-2">'
                        tb +='<input type="text" class="form-contr" name="hargabarang[]" placeholder="Harga Barang...">'
                        tb += '<div id="validationServer03Feedback" class="invalid-feedback">'
                                                   
                        tb +='</div>'
                    tb +='</div>'
                    tb +='<button type="button" id="remove" class="btn btn-danger mb-2">Hapus</button>'
                tb += '</section>'

                
            $('#add').click(function(){
                $('#aksi #formbarang').append(tb);
            });

            $('#aksi #formbarang').on('click','#remove',function(){
                $(this).closest('section').remove();
            });
        });
    </script>
</body>

</html>