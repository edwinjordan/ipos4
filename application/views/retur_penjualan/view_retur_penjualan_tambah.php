<!--<link type="text/css" href="--><?php //echo base_url()?><!--assets_date/css/ui.all.css" rel="stylesheet" />-->
<!--<script type="text/javascript" src="--><?php //echo base_url()?><!--assets_date/js/jquery-1.3.2.js"></script>-->
<!--<script type="text/javascript" src="--><?php //echo base_url()?><!--assets_date/ui/ui.core.js"></script>-->
<!--<script type="text/javascript" src="--><?php //echo base_url()?><!--assets_date/ui/ui.datepicker.js"></script>-->
<!--<script type="text/javascript" src="--><?php //echo base_url()?><!--assets_date/ui/ui.datepicker-id.js"></script>-->

<?php $title = "<i class='fa fa-file-text-o'></i>&nbsp;Tambah Retur Penjualan"; ?>
<div id="idImgLoader" style="margin: 0 auto; text-align: center;">
    <img src='<?php echo base_url(); ?>assets/img/loader-dark.gif'/>
</div>
<div id="data" style="display:none;">
    <section class="content">
        <div class="page-header">
            <h1>
                <?php echo $title; ?>
            </h1>
        </div><!-- /.page-header -->

        <div id="panel-data">
            <div class="widget-box">
                <div class="widget-header">

                    <div class="widget-toolbar">
                        <a href="#" data-action="collapse">
                            <i class="ace-icon fa fa-chevron-up"></i>
                        </a>

                        <a href="#" data-action="close">
                            <i class="ace-icon fa fa-times"></i>
                        </a>
                    </div>
                </div>

                <div class="widget-body">
                    <div class="widget-main">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box-header">

                                    <!--                                    <form action="http://www.toko73wp.com/pembelian/pembelian_simpan" method="post"-->
                                    <!--                                          accept-charset="utf-8" class="form-horizontal" enctype="multipart/form-data">-->

                                    <div class="col-xs-12">
                                        <div class="col-xs-2">
                                            <div class="form-group">
                                                No Transaksi
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <input id="notransaksi" type="text">
                                        </div>

                                        <div class="col-xs-2">
                                            <div class="form-group" align="center">
                                                Masuk Ke
                                            </div>
                                        </div>
                                        <div class="col-xs-1">
                                            <div class="form-group">
                                                <select name="jenis_faktur" id="jenis_faktur" class="form-control"
                                                        data-live-search="true" data-width="100%" required=""
                                                        onchange="javascript:selectfaktur()">
                                                    <option value="utm">UTM</option>
                                                    <option value="gd">GD</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-3">
                                            <div class="form-group" align="center">

                                            </div>
                                        </div>
                                        <div class="col-xs-1">
                                            <div class="form-group" align="center">
                                                Jam
                                            </div>
                                        </div>
                                        <div class="col-xs-1">
                                            <div class="form-group" align="center">
                                                <input class="form-control" type="text" readonly="" name="jam" value="<?php echo date('h:i:s'); ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-12">
                                        <div class="col-xs-2">
                                            <div class="form-group">
                                                Tanggal
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="form-group">
                                                <input id="tanggal" type="text">
                                            </div>
                                        </div>
                                        <div class="col-xs-2" align="center">
                                            <div class="form-group">
                                                Pelanggan
                                            </div>
                                        </div>
                                        <div class="col-xs-1">
                                            <div class="form-group">
                                                <select class="form-control" data-live-search="true"
                                                        data-width="100%" required="" name="id_top">
                                                    <option value="3">3</option>
                                                    <option value="4">7</option>
                                                    <option value="5">14</option>
                                                    <option value="6">30</option>
                                                    <option value="7">60</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-1">
                                            <div class="form-group">
                                                <button class="btn btn-default" onclick="search_table()"><i
                                                            class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                        <div class="col-xs-2">
                                            <div class="form-group" align="center">

                                            </div>
                                        </div>
                                        <div class="col-xs-1">
                                            <div class="form-group" align="center">
                                                User
                                            </div>
                                        </div>
                                        <div class="col-xs-1">
                                            <div class="form-group" align="center">
                                                <input class="form-control" type="text" name="user" value="admin" readonly="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-12">
                                        <div class="col-xs-2">
                                            <div class="form-group">
                                                No Trs Jual
                                            </div>
                                        </div>
                                        <div class="col-xs-1">
                                            <div class="form-group">
                                                <input class="form-control" name="kode_supplier" id="kode_supplier"
                                                       value="2" type="hidden">
                                                <input class="form-control" name="supplier" id="nama_supplier"
                                                       onfocus="cc()" required="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-xs-1">
                                            <div class="form-group">
                                                <button class="btn btn-default" onclick="search_table()"><i
                                                            class="fa fa-search"></i></button>
                                            </div>
                                        </div>

                                        <div class="col-xs-6">
                                            <div class="form-group" align="center">

                                            </div>
                                        </div>
                                        <div class="col-xs-1">
                                            <div class="form-group" align="center">
                                                Dept.
                                            </div>
                                        </div>
                                        <div class="col-xs-1">
                                            <div class="form-group" align="center">
                                                <input class="form-control" type="text" name="dep" value="UTM" readonly="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button class="btn btn-default" onclick="Pilih_item_retur()"><i class="fa fa-list"></i> Pilih Item Retur</button>

                            </div>
                            <br/>
                            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Item</th>
                                    <th>Keterangan</th>
                                    <th>Jumlah</th>
                                    <th>Satuan</th>
                                    <th>Harga</th>
                                    <th>Potongan</th>
                                    <th>Total</th>
                                </tr>
                                </thead>
                                <tbody></tbody>
                            </table>

                            <div>&nbsp;</div>
                            <div class="col-xs-12">
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <button class="btn btn-default" onclick="Hapus_detail()"> Hapus Detail</button>
                                    </div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <button class="btn btn-default" onclick="Data_serial()"> Data Serial</button>
                                    </div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <button class="btn btn-default" onclick="Data_rakitan()"> Data Rakitan</button>
                                    </div>
                                </div>
                                <div class="col-xs-2">
                                    <div class="form-group">

                                    </div>
                                </div>
                                <div class="col-xs-1" align="right">
                                    <div class="form-group">
                                        Sub Total
                                    </div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <input class="form-control" name="kode_supplier" id="kode_supplier"
                                               value="2" type="hidden">
                                        <input class="form-control" name="supplier" id="nama_supplier"
                                               onfocus="cc()" required="" type="text">
                                    </div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <input class="form-control" name="kode_supplier" id="kode_supplier"
                                               value="2" type="hidden">
                                        <input class="form-control" name="supplier" id="nama_supplier"
                                               onfocus="cc()" required="" type="text">
                                    </div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group" align="center">

                                    </div>
                                </div>

                                <div class="col-xs-1">
                                    <div class="form-group" align="center">
                                        Total Akhir
                                    </div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <input class="form-control" name="kode_supplier" id="kode_supplier"
                                               value="2" type="hidden">
                                        <input class="form-control" name="supplier" id="nama_supplier"
                                               onfocus="cc()" required="" type="text">
                                    </div>
                                </div>

                            </div>

                            <div class="col-xs-12">
                                <div class="col-xs-2">
                                    <div class="form-group">
                                        <button class="btn btn-default" onclick="Lihat_Harga()"> Lihat Harga</button>
                                    </div>
                                </div>

                                <div class="col-xs-3">
                                    <div class="form-group">

                                    </div>
                                </div>

                                <div class="col-xs-1" align="right">
                                    <div class="form-group">
                                        Potongan
                                    </div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <input class="form-control" name="kode_supplier" id="kode_supplier"
                                               value="2" type="hidden">
                                        <input class="form-control" name="supplier" id="nama_supplier"
                                               onfocus="cc()" required="" type="text">
                                    </div>
                                </div>

                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <input class="form-control" name="kode_supplier" id="kode_supplier"
                                               value="2" type="hidden">
                                        <input class="form-control" name="supplier" id="nama_supplier"
                                               onfocus="cc()" required="" type="text">
                                    </div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <button class="btn btn-default" onclick="search_table()"><i class="fa fa-edit"></i></button>
                                    </div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group" align="center">
                                        Tunai
                                    </div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <input class="form-control" name="kode_supplier" id="kode_supplier"
                                               value="2" type="hidden">
                                        <input class="form-control" name="supplier" id="nama_supplier"
                                               onfocus="cc()" required="" type="text">
                                    </div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <button class="btn btn-default" onclick="search_table()"><i
                                                    class="fa fa-edit"></i></button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12">
                                <div class="col-xs-5">
                                    <div class="form-group">

                                    </div>
                                </div>
                                <div class="col-xs-1" align="right">
                                    <div class="form-group">
                                        Pajak
                                    </div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <input class="form-control" name="kode_supplier" id="kode_supplier"
                                               value="2" type="hidden">
                                        <input class="form-control" name="supplier" id="nama_supplier"
                                               onfocus="cc()" required="" type="text">
                                    </div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <input class="form-control" name="kode_supplier" id="kode_supplier"
                                               value="2" type="hidden">
                                        <input class="form-control" name="supplier" id="nama_supplier"
                                               onfocus="cc()" required="" type="text">
                                    </div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <button class="btn btn-default" onclick="search_table()"><i
                                                    class="fa fa-edit"></i></button>
                                    </div>
                                </div>

                                <div class="col-xs-1" align="center">
                                    <div class="form-group">
                                        Pot. Piutang
                                    </div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <input class="form-control" name="kode_supplier" id="kode_supplier"
                                               value="2" type="hidden">
                                        <input class="form-control" name="supplier" id="nama_supplier"
                                               onfocus="cc()" required="" type="text">
                                    </div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <button class="btn btn-default" onclick="search_table()"><i
                                                    class="fa fa-edit"></i></button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12">
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        Keterangan
                                    </div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <input class="form-control" name="kode_supplier" id="kode_supplier"
                                               value="2" type="hidden">
                                        <input class="form-control" name="supplier" id="nama_supplier"
                                               onfocus="cc()" required="" type="text">
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="form-group">

                                    </div>
                                </div>

                                <div class="col-xs-1" align="right">
                                    <div class="form-group">
                                        Biaya Lain
                                    </div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <button class="btn btn-default" onclick="search_table()"><i
                                                    class="fa fa-file"></i></button>
                                    </div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <input class="form-control" name="kode_supplier" id="kode_supplier"
                                               value="2" type="hidden">
                                        <input class="form-control" name="supplier" id="nama_supplier"
                                               onfocus="cc()" required="" type="text">
                                    </div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <button class="btn btn-default" onclick="search_table()"><i
                                                    class="fa fa-edit"></i></button>
                                    </div>
                                </div>

                                <div class="col-xs-1">
                                    <div class="form-group" align="center">

                                    </div>
                                </div>

                                <div class="col-xs-1">
                                    <div class="form-group">
                                        <button class="btn btn-default" onclick="search_table()"><i
                                                    class="fa fa-cut"></i> Potong Piutang</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <button class="btn btn-info" onclick="Tambah()"><i class="fa fa-plus"></i> Tambah</button>
                                <button class="btn btn-danger" onclick="Simpan()"><i class="fa fa-save"></i> Smpan</button>
                                <button class="btn btn-warning" onclick="Batal()"><i class="fa fa-close"></i> Batal</button>
                                <button class="btn btn-default" onclick="Cetak()"><i class="fa fa-print"></i> Cetak</button>
                            </div>
                        </div>
                    </div><!-- /.span -->
                </div>
            </div><!-- /.row -->
        </div>
</div>
</div>

<script>
    var zonk = '';
    var save_method;
    var link = "<?php echo site_url('Daftar_Pembelian')?>";
    var table;

    $(document).ready(function () {
        //$('#idImgLoader').show(2000);
        $('#idImgLoader').fadeOut(2000);
        setTimeout(function () {
            data();
        }, 2000);
    });

//    $(document).ready(function(){
//        $("#tanggal").datepicker();
//    });


    function data() {
        $('#data').fadeIn();
    }


    $(document).ready(function() {
        table = $('#dynamic-table').DataTable({

            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "bDestroy": true,
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url('Daftar_Pembelian/ajax_list')?>",
                "type": "POST"
            },

            //Set column definition initialisation properties.
            "columnDefs": [
                {
                    "targets": [ -1 ], //last column
                    "orderable": false, //set not orderable
                },
            ],

        });

    }).fnDestroy();


</script>