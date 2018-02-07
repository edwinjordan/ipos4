<?php $title = "<i class='fa fa-plus'></i>&nbsp;Item Baru"; ?>
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
                        <md- class="row">
                            <div class="col-xs-12">
                                <form class="form-horizontal" role="form" id="formAksi">
                                    <ul class="nav nav-tabs nav-justified">
                                        <li class="active">
                                            <a href="#DataUmum" data-toggle="tab">Data Umum</a>
                                        </li>
                                        <li>
                                            <a href="#Satuan" data-toggle="tab">Satuan</a>
                                        </li>
                                        <li>
                                            <a href="#Rakitan" data-toggle="tab">Rakitan</a>
                                        </li>
                                        <li>
                                            <a href="#HargaJual" data-toggle="tab">Harga Jual</a>
                                        </li>
                                        <li>
                                            <a href="#PotonganHargaJual" data-toggle="tab">Potongan Harga Jual</a>
                                        </li>
                                        <li>
                                            <a href="#Lain-lain" data-toggle="tab">Lain-lain</a>
                                        </li>
                                        <li>
                                            <a href="#Akunting" data-toggle="tab">Akunting</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="DataUmum" class="tab-pane active">
                                            <!--                    <h3>Data Umum</h3>-->
                                            <?php $this->load->view('item_baru/view_data_umum'); ?>
                                        </div>
                                        <div id="Satuan" class="tab-pane">
                                            <!--                    <h3>Satuan</h3>-->
                                            <?php $this->load->view('item_baru/view_satuan'); ?>
                                        </div>
                                        <div id="Rakitan" class="tab-pane">
                                            <!--                    <h3>Rakitan</h3>-->
                                            <?php $this->load->view('item_baru/view_rakitan') ?>
                                        </div>
                                        <div id="HargaJual" class="tab-pane">
                                            <!--                    <h3>Harga Jual</h3>-->
                                            <?php $this->load->view('item_baru/view_harga_jual') ?>
                                        </div>
                                        <div id="PotonganHargaJual" class="tab-pane">
                                            <!--                    <h3>PotonganHargaJual</h3>-->
                                            <?php $this->load->view('item_baru/view_potongan_harga_jual') ?>
                                        </div>
                                        <div id="Lain-lain" class="tab-pane">
                                            <!--                    <h3>Lain-lain</h3>-->
                                            <?php $this->load->view('item_baru/view_lain_lain') ?>
                                        </div>
                                        <div id="Akunting" class="tab-pane">
                                            <!--                    <h3>Akunting</h3>-->
                                            <?php $this->load->view('item_baru/view_akunting') ?>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-12">
                                            <div>
                                                <!--                                    <button class="btn btn-primary" type="button"><i class="fa fa-save"></i> Save</button><span> </span>-->
                                                <button class="btn btn-info" type="button" id="btn_save"
                                                        onclick="save()">
                                                    <i class="ace-icon fa fa-check bigger-110"></i>
                                                    Submit
                                                </button>
                                                <button class="btn btn-warning" type="button"><i
                                                            class="fa fa-close"></i> Batal
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
</div>

<script type="text/javascript">
    var zonk = '';
    var save_method;
    var link = "<?php echo site_url('Item_Baru')?>";
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
                "url": "<?php echo site_url('Item_Baru/ajax_list')?>",
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


    function Tambah() {
        save_method = 'add';
        $('#panel-data').fadeOut('slow');
        $('#form-data').fadeIn('slow');
        document.getElementById('formAksi').reset();
    }

    function reload_table() {
        table.ajax.reload(null, false);
    }

    function Batal() {
        $('#form-data').slideUp(500, 'swing');
        $('#panel-data').fadeIn(1000);
        location.reload();
    }

    function save() {
        $('#btn_save').text('Saving...');
        $('#btn_save').attr('disabled', true);

        var url;
        if (save_method == 'add') {
            url = link + "/ajax_add";
        } else {
            url = link + "/ajax_update";
        }
        tinyMCE.triggerSave();
        $.ajax({
            url: url,
            type: "POST",
            data: $('#formAksi').serialize(),
            dataType: "JSON",
            success: function (result) {
                if (result.status) {

                    setTimeout(function () {
                        Batal();
                    }, 1000);

                    setTimeout(function () {
                        reload_table();
                    }, 1000);
                }
                setTimeout(function () {
                    $('#btn_save').text('Save');
                    $('#btn_save').attr('disabled', false);
                    document.getElementById('formAksi').reset();
                }, 1000);
                swal_berhasil();
                setTimeout(function () {
                    reload_table();
                }, 1000);
            }, error: function (jqXHR, textStatus, errorThrown) {
                // alert('Error adding/update data');
                swal({title: "ERROR", text: "Error adding / update data", type: "warning", closeOnConfirm: true});
                $('#btnSave').text('save');
                $('#btnSave').attr('disabled', false);
            }
        });
    }

    function edit(id) {
        save_method = 'update';
        $('#panel-data').fadeOut('slow');
        $('#form-data').fadeIn('slow');
        document.getElementById('formAksi').reset();
        $.ajax({
            url: link + "/ajax_edit/" + id,
            type: "GET",
            dataType: "JSON",
            success: function (result) {
                //document.getElementById('fc_kdbahan').setAttribute('readonly','readonly');
                $('[name="kode_item"]').val(result.kode_item);
                $('[name="kode_item_tipe"]').val(result.kode_item_tipe);
                $('[name="kode_merek"]').val(result.kode_merek);
                $('[name="kode_gudang"]').val(result.kode_gudang);
                $('[name="kode_rak"]').val(result.kode_rak);
                $('[name="item_nama"]').val(result.item_nama);
                $('[name="item_ket"]').val(result.item_ket);
                $('[name="item_status_jual"]').val(result.item_status_jual);
                $('[name="item_stok_min"]').val(result.item_stok_min);

            }, error: function (jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }
</script>