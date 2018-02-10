<link type="text/css" href="<?php echo base_url() ?>/assets/css/ui.all.css" rel="stylesheet"/>

<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-2.1.4.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/ui.core.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/ui.datepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/ui.datepicker-id.js"></script>

<?php $title = "<i class='fa fa-file-text-o'></i>&nbsp;Tambah Pembelian"; ?>
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

                                    <form action="http://www.toko73wp.com/pembelian/pembelian_simpan" method="post"
                                          accept-charset="utf-8" class="form-horizontal" enctype="multipart/form-data">

                                        <div class="col-xs-12">
                                            <div class="col-xs-2">
                                                <div class="form-group">
                                                    No Transaksi
                                                </div>
                                            </div>
                                            <div class="col-xs-2">
                                                <div class="form-group">
                                                    <!-- <a data-toggle="modal" href="#modal-1"> -->
                                                    <input class="form-control" name="no_transaksi" id="no_transaksi"
                                                           onfocus="cc()" required="" type="text">
                                                    <!-- </a> -->
                                                </div>
                                            </div>
                                            <div class="col-xs-2" align="center">
                                                <div class="form-group">
                                                    Pesanan
                                                </div>
                                            </div>
                                            <div class="col-xs-2">
                                                <div class="form-group">
                                                    <input class="form-control" name="pesanan" id="pesanan"
                                                           onfocus="cc()" required="" type="text">
                                                </div>
                                            </div>
                                            <div class="col-xs-2">
                                                <div class="form-group">
                                                    <button class="btn btn-search" onclick="cari_pesanan()"><i
                                                                class="fa fa-search"></i></button>
                                                </div>
                                            </div>
                                            <div class="col-xs-1">
                                                <div class="form-group">
                                                    Jam
                                                </div>
                                            </div>
                                            <div class="col-xs-1">
                                                <div class="form-group">
                                                    <input class="form-control" name="jam"
                                                           value="<?php echo date('h:i:sa') ?>" readonly="" type="text">
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
                                                    <input id="tanggal" name="no_faktur_pembelian"
                                                           value="<?php echo date('d/m/y') ?>" type="text">
                                                </div>
                                            </div>
                                            <div class="col-xs-2" align="center">
                                                <div class="form-group">
                                                    Masuk Ke
                                                </div>
                                            </div>
                                            <div class="col-xs-2">
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                            data-width="100%" required="" name="masuk_gudang">
                                                        <?php
                                                        foreach ($gudang as $gud) {
                                                            ?>
                                                            <option value="<?php echo $gud['id_gudang'] ?>"><?php echo $gud['gudang_ket'] ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-2">
                                                <div class="form-group">
                                                </div>
                                            </div>
                                            <div class="col-xs-1">
                                                <div class="form-group">
                                                    User
                                                </div>
                                            </div>
                                            <div class="col-xs-1">
                                                <div class="form-group">
                                                    <input class="form-control" name="user" value="admin" readonly=""
                                                           type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="col-xs-2">
                                                <div class="form-group">
                                                    Supplier
                                                </div>
                                            </div>
                                            <div class="col-xs-2">
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                            data-width="100%" required="" name="supplier">
                                                        <?php
                                                        foreach ($supplier as $sup) {
                                                            ?>
                                                            <option value="<?php echo $sup['kode_supplier'] ?>"><?php echo $sup['supplier_nama'] ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-2">
                                                <div class="form-group">
                                                    <button class="btn btn-search" onclick="cari_supplier()"><i
                                                                class="fa fa-search"></i></button>
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class="form-group">
                                                </div>
                                            </div>
                                            <div class="col-xs-1">
                                                <div class="form-group">
                                                    Depth
                                                </div>
                                            </div>
                                            <div class="col-xs-1">
                                                <div class="form-group">
                                                    <input class="form-control" name="depth" value="GD" readonly=""
                                                           type="text">
                                                </div>
                                            </div>
                                        </div>

                                    </form>

                                    <button class="btn btn-default" onclick="reload_table()"><i
                                                class="fa fa-refresh"></i> Reload
                                    </button>
                                    <button class="btn btn-danger" onclick="Tambah()"><i class="fa fa-plus"></i> Tambah
                                        Data
                                    </button>

                                </div>
                                <br/>
                                <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <!--                                        <th>No.</th>-->
                                        <th>Kode Detail Keranjang</th>
                                        <th>Kode Keranjang</th>
                                        <th>Kode Satuan</th>
                                        <th>Jumlah</th>
                                        <th>Harga</th>
                                        <th>Diskon</th>
                                        <th>Total</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                                <br>
                                <div class="col-xs-12">
                                    <div class="col-xs-1">
                                        <div class="form-group">
                                            Jatuh Tempo
                                        </div>
                                    </div>
                                    <div class="col-xs-1">
                                        <div class="form-group">
                                            <select class="form-control" data-live-search="true" data-width="100%"
                                                    required="" name="tempo">
                                                <option value=""><?php echo date('d/m/y'); ?></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-1">
                                        <div class="form-group">
                                            <select class="form-control" data-live-search="true" data-width="100%"
                                                    required="" name="masa">
                                                <option value="">10</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="form-group">

                                        </div>
                                    </div>
                                    <div class="col-xs-1">
                                        <div class="form-group">
                                            Sub Total
                                        </div>
                                    </div>
                                    <div class="col-xs-1">
                                        <div class="form-group">
                                            <input class="form-control" name="sub_total" value="0,00" readonly=""
                                                   type="text">
                                        </div>
                                    </div>

                                    <div class="col-xs-1">
                                        <div class="form-group">
                                            <input class="form-control" name="sub_total1" value="" readonly=""
                                                   type="text">
                                        </div>
                                    </div>
                                    <div class="col-xs-1">
                                        <div class="form-group">

                                        </div>
                                    </div>
                                    <div class="col-xs-1">
                                        <div class="form-group">
                                            Total Akhir
                                        </div>
                                    </div>
                                    <div class="col-xs-1">
                                        <div class="form-group">
                                            <input class="form-control" name="total_akhir" value="0,00" readonly=""
                                                   type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="col-xs-1">
                                        <div class="form-group">
                                            keterangan
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <div class="form-group">
                                            <input class="form-control" name="keterangan" type="text">
                                        </div>
                                    </div>
                                    <div class="col-xs-1">
                                        <div class="form-group">

                                        </div>
                                    </div>
                                    <div class="col-xs-1">
                                        <div class="form-group">
                                            Potongan
                                        </div>
                                    </div>
                                    <div class="col-xs-1">
                                        <div class="form-group">
                                            <input class="form-control" name="potongan" value="0,00" type="text">
                                        </div>
                                    </div>
                                    <div class="col-xs-1">
                                        <div class="form-group">
                                            <input class="form-control" name="potongan1" value="0,00" type="text">
                                        </div>
                                    </div>
                                    <div class="col-xs-1">
                                        <div class="form-group">
                                            <button class="btn btn-search" onclick="edit_potongan()"><i
                                                        class="fa fa-edit"></i></button>
                                        </div>
                                    </div>
                                    <div class="col-xs-1">
                                        <div class="form-group">
                                            DP PO
                                        </div>
                                    </div>
                                    <div class="col-xs-1">
                                        <div class="form-group">
                                            <input class="form-control" name="dp_po" value="0,00" readonly=""
                                                   type="text">
                                        </div>
                                    </div>
                                    <div class="col-xs-1">
                                        <div class="form-group">
                                            <button class="btn btn-search" onclick="edit_dp()"><i
                                                        class="fa fa-edit"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="col-xs-5">
                                        <div class="form-group">

                                        </div>
                                    </div>
                                    <div class="col-xs-1">
                                        <div class="form-group">
                                            Pajak
                                        </div>
                                    </div>
                                    <div class="col-xs-1">
                                        <div class="form-group">
                                            <input class="form-control" name="pajak" value="0,00" type="text">
                                        </div>
                                    </div>
                                    <div class="col-xs-1">
                                        <div class="form-group">
                                            <input class="form-control" name="pajak1" value="0,00" type="text">
                                        </div>
                                    </div>
                                    <div class="col-xs-1">
                                        <div class="form-group">
                                            <button class="btn btn-search" onclick="edit_pajak()"><i
                                                        class="fa fa-edit"></i></button>
                                        </div>
                                    </div>
                                    <div class="col-xs-1">
                                        <div class="form-group">
                                            Tunai/DP
                                        </div>
                                    </div>
                                    <div class="col-xs-1">
                                        <div class="form-group">
                                            <input class="form-control" name="tunai" value="0,00" readonly=""
                                                   type="text">
                                        </div>
                                    </div>
                                    <div class="col-xs-1">
                                        <div class="form-group">
                                            <button class="btn btn-search" onclick="edit_tunai()"><i
                                                        class="fa fa-edit"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="col-xs-5">
                                        <div class="form-group">

                                        </div>
                                    </div>
                                    <div class="col-xs-1">
                                        <div class="form-group">
                                            Biaya Lain
                                        </div>
                                    </div>
                                    <div class="col-xs-1">
                                        <div class="form-group">
                                            <button class="btn btn-search" onclick="biaya()"><i class="fa fa-file"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-xs-1">
                                        <div class="form-group">
                                            <input class="form-control" name="pajak1" value="0,00" type="text">
                                        </div>
                                    </div>
                                    <div class="col-xs-1">
                                        <div class="form-group">
                                            <button class="btn btn-search" onclick="edit_biaya()"><i
                                                        class="fa fa-edit"></i></button>
                                        </div>
                                    </div>
                                    <div class="col-xs-1">
                                        <div class="form-group">
                                            Kredit
                                        </div>
                                    </div>
                                    <div class="col-xs-1">
                                        <div class="form-group">
                                            <input class="form-control" name="kredit" value="0,00" readonly=""
                                                   type="text">
                                        </div>
                                    </div>
                                    <div class="col-xs-1">
                                        <div class="form-group">
                                            <button class="btn btn-search" onclick="edit_kredit()"><i
                                                        class="fa fa-edit"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-default" onclick="simpan()"><i class="fa fa-save"></i> Simpan
                                </button>
                                <button class="btn btn-default" onclick="batal()"><i class="fa fa-close"></i> Batal
                                </button>
                                <button class="btn btn-default"><i class="fa fa-print"></i> Cetak</button>
                                <button class="btn btn-default" onclick="cetak_barcode()"><i class="fa fa-print"></i>
                                    Cetak Barcode
                                </button>
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

    function data() {
        $('#data').fadeIn();
    }

    $(document).ready(function () {
        table = $('#dynamic-table').DataTable({

            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "bDestroy": true,
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url('Daftar_Pembelian/detail_list')?>",
                "type": "POST"
            },

            //Set column definition initialisation properties.
            "columnDefs": [
                {
                    "targets": [-1], //last column
                    "orderable": false, //set not orderable
                },
            ],

        });

    }).fnDestroy();

    function reload_table() {
        table.ajax.reload(null, false);
    }

    function Batal() {
        $('#form-data').slideUp(500, 'swing');
        $('#panel-data').fadeIn(1000);
    }

    function Tambah() {
//        save_method = 'add';
//        $('#panel-data').fadeOut('slow');
//        $('#form-data').fadeIn('slow');
//        document.getElementById('formAksi').reset();

        save_method = 'add';
        $('#form')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string
        $('#modal_form').modal('show'); // show bootstrap modal
        $('.modal-title').text('Add Data'); // Set Title to Bootstrap modal title
    }

    function save() {
        $('#btn_save').text('Saving...');
        $('#btn_save').attr('disabled', true);

        var url;
        if (save_method == 'add') {
            url = link + "/detail_add";
        } else {
            url = link + "/detail_update";
        }
        tinyMCE.triggerSave();

        $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data)
            {

                if(data.status) //if success close modal and reload ajax table
                {
                    $('#modal_form').modal('hide');
                    reload_table();
                }
                else
                {
                    for (var i = 0; i < data.inputerror.length; i++)
                    {
                        $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                        $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                    }
                }
                $('#btnSave').text('save'); //change button text
                $('#btnSave').attr('disabled',false); //set button enable


            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
                $('#btnSave').text('save'); //change button text
                $('#btnSave').attr('disabled',false); //set button enable

            }
        });
    }

    function edit(id) {
        save_method = 'update';
        $('#form')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string

        //Ajax Load data from ajax
        $.ajax({
            url : "<?php echo site_url('Daftar_Pembelian/detail_edit/')?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {

                $('[name="kode_pembelian_detail_keranjang"]').val(data.kode_pembelian_detail_keranjang);
                $('[name="kode_pembelian_keranjang"]').val(data.kode_pembelian_keranjang);
                $('[name="kode_satuan"]').val(data.kode_satuan);
                $('[name="pembelian_detail_keranjang_jumlah"]').val(data.pembelian_detail_keranjang_jumlah);
                $('[name="pembelian_detail_keranjang_harga"]').val(data.pembelian_detail_keranjang_harga);
                $('[name="pembelian_detail_keranjang_diskon"]').val(data.pembelian_detail_keranjang_diskon);
                $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit Data'); // Set title to Bootstrap modal title

            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }

    function hapus(id) {
        if (confirm('Are you sure delete this data?')) {
            $.ajax({
                url: "<?php echo site_url('Daftar_Pembelian/detail_delete')?>/" + id,
                type: "POST",
                dataType: "JSON",
                success: function (data) {
                    setTimeout(function () {
                        Batal();
                    }, 1000);

                    setTimeout(function () {
                        reload_table();
                    }, 1000);
                    swal_berhasil();
                }, error: function (jqXHR, textStatus, errorThrown) {
                    swal({title: "ERROR", text: "Error delete data", type: "warning", closeOnConfirm: true});
                    $('#btnSave').text('save');
                    $('#btnSave').attr('disabled', false);
                }
            });
        }
    }
</script>


<div class="modal fade" id="modal_form" role="form">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title">Tambah Pembelian</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" id="kode_pembelian_detail_keranjang"
                           name="kode_pembelian_detail_keranjang"/>
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Keranjang</label>
                            <div class="col-md-9">
                                <input id="kode_pembelian_keranjang"
                                       name="kode_pembelian_keranjang" placeholder="Keranjang" class="form-control"
                                       type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Satuan</label>
                            <div class="col-md-9">
                                <input id="kode_satuan" name="kode_satuan"
                                       placeholder="Satuan" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Jumlah</label>
                            <div class="col-md-9">
                                <input id="pembelian_detail_keranjang_jumlah"
                                       name="pembelian_detail_keranjang_jumlah"
                                       placeholder="Jumlah" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Harga</label>
                            <div class="col-md-9">
                                <input id="pembelian_detail_keranjang_harga"
                                       name="pembelian_detail_keranjang_harga"
                                       placeholder="Harga" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Diskon</label>
                            <div class="col-md-9">
                                <input id="pembelian_detail_keranjang_diskon"
                                       name="pembelian_detail_keranjang_diskon"
                                       placeholder="Diskon" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->