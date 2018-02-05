<?php $title = "<i class='fa fa-file-text-o'></i>&nbsp;Daftar Pelanggan"; ?>
<div id="idImgLoader" style="margin: 0 auto; text-align: center;">
  <img src='<?php echo base_url();?>assets/img/loader-dark.gif' />
</div>
<div id="data" style="display:none;">
<div class="page-header">
  <h1>
    <?php echo $title;?>
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
    <div class="col-xs-12">
        <div class="col-xs-2">
            <div class="form-group">
                Kata Kunci
            </div>
        </div>
        <div class="col-xs-9">
            <div class="form-group">
                <!-- <a data-toggle="modal" href="#modal-1"> -->
                <input class="form-control" name="kode_supplier" id="kode_supplier" value="2" type="hidden">
                <input class="form-control" name="supplier" id="nama_supplier" onfocus="cc()" type="text">
                <!-- </a> -->
            </div>
        </div>
        <div class="col-xs-1">
            <div class="form-group">
                <button class="btn btn-xs" onclick="search_table()"><i class="fa fa-search"></i></button>
                <button class="btn btn-xs" onclick="refresh_table()"><i class="fa fa-refresh"></i></button>
            </div>
        </div>
    </div>
</div>
    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>Kode</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Kode Provinsi</th>
            <th>Kode Kota</th>
            <th>Kode Kecamatan</th>
            <th>Kode Pos</th>
            <th>Fax</th>
            <th>Telepon</th>
            <th>No Hp</th>
            <th>Email</th>
            <th>No Rek</th>
            <th>Rekan</th>
            <th>Bank</th>
            <th>Keterangan</th>
            <th>Lim Jml Piutang</th>
            <th>Jatuh Tempo</th>
            <th>Grup Pel</th>
            <th>Tipe Potongan</th>
            <th>NPWP</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody></tbody>
</table>
  <button class="btn btn-danger" onclick="Tambah()" ><i class="fa fa-plus"></i> Tambah Data</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<script type="text/javascript">
    var zonk = '';
    var save_method;
    var link = "<?php echo site_url('Daftar_Pelanggan')?>";
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
                "url": "<?php echo site_url('Daftar_Pelanggan/ajax_list')?>",
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


    function hapus(id) {
        if (confirm('Are you sure delete this data?')) {
            $.ajax({
                url: "<?php echo site_url('Daftar_Pelanggan/ajax_delete')?>/" + id,
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
        $('#form-data').slideUp(500,'swing');
        $('#panel-data').fadeIn(1000);
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
            url : link+"/ajax_edit/"+id,
            type: "GET",
            dataType: "JSON",
            success: function(result) {
                //document.getElementById('fc_kdbahan').setAttribute('readonly','readonly');
                $('[name="kode_pelanggan"]').val(result.kode_pelanggan);
                $('[name="item_jenis_nama"]').val(result.item_jenis_nama);

//                pelanggan_nama
//                pelanggan_alamat
//                kode_provinsi
//                kode_kota
//                kode_kecamatan
//                pelanggan_kodepos
//                pelanggan_fax
//                pelanggan_telepon'
//                pelanggan_nohp'
//                pelanggan_email'
//                pelanggan_norek'
//                pelanggan_rekan'
//                pelanggan_bank'
//                pelanggan_ket'
//                pelanggan_limjmlpiutang'
//                pelanggan_jatuhtempo'
//                kode_plg_grup'
//                pelanggan_tipe_potongan'
//                pelanggan_npwp'

            }, error: function (jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }
</script>

<!--fungsi tambah-->
<div class="row">
    <div class="col-xs-12">
        <div id="form-data" style="display:none;">
            <div class="widget-box">
                <div class="widget-header">
                    <h4 class="widget-title">Form Jenis</h4>

                    <div class="widget-toolbar">
                        <a href="#" data-action="collapse">
                            <i class="ace-icon fa fa-chevron-up"></i>
                        </a>

                        <a onclick="Batal()" data-action="close">
                            <i class="ace-icon fa fa-times"></i>
                        </a>
                    </div>
                </div>

                <div class="widget-body">
                    <div class="widget-main">
                        <div class="row">
                            <div class="col-xs-12">
                                <form class="form-horizontal" role="form" id="formAksi">
                                    <input type="hidden" name="kode_item_jenis">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label no-padding-right" for="form-field-1">
                                            Jenis </label>
                                        <div class="col-sm-10">
                                            <input type="text" id="item_jenis_nama" name="item_jenis_nama"
                                                   placeholder="" class="col-xs-10 col-sm-5"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label no-padding-right" for="form-field-1">
                                            Keterangan</label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control" id="item_jenis_ket" name="item_jenis_ket"
                                                      placeholder="" class="col-xs-10 col-sm-5"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-offset-2 col-md-9">
                                        <button class="btn btn-info" type="button" id="btn_save" onclick="save()">
                                            <i class="ace-icon fa fa-check bigger-110"></i>
                                            Submit
                                        </button>

                                        &nbsp; &nbsp; &nbsp;
                                        <button class="btn" type="reset">
                                            <i class="ace-icon fa fa-undo bigger-110"></i>
                                            Reset
                                        </button>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div>
        </div><!-- /.row -->
    </div>
</div>