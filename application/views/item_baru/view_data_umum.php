<div class="widget-body">
    <div class="widget-main">
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" role="form" id="formAksi">
                <div>
                    <div class="col-md-2" align="right"><span>Tipe Item</span><span> :</span></div>
                    <div class="col-md-4">
                        <input type="radio" name="cek" value="pajak">Barang</input><br>
                        <input type="radio" name="cek" value="pajak">Jasa</input><br>
                        <input type="radio" name="cek" value="pajak">Rakitan</input><br>
                        <input type="radio" name="cek" value="pajak">Non Inventory</input>
                    </div>
                    <div class="col-md-11"><span>&nbsp;</span></div>
                    <div class="col-md-11">
                        <span>&nbsp;</span>
                    </div>
                </div>
                <div>
                    <div class="col-md-2" align="right"><span>Kode Item</span><span> :</span></div>
                    <div class="col-md-9">
                        <input type="text" id="kode_item_tipe" name="kode_item_tipe" class="input-sm"></input>
                    </div>
                </div>
                <div>
                    <div class="col-md-2" align="right"><span>Nama Item</span><span> :</span></div>
                    <div class="col-md-9">
                        <input type="text" id="item_nama" name="item_nama" class="input-sm"></input>
                    </div>
                </div>

                <div>
                    <div class="col-md-2" align="right"><span>Jenis</span><span> :</span></div>
                    <div class="col-md-4">
                        <select class="col-md-6" data-live-search="true" data-width="100%" required=""
                                id="kode_item_jenis" name="kode_item_jenis">
                            <option value="3"></option>
                            <option value="4">7</option>
                            <option value="5">14</option>
                            <option value="6">30</option>
                            <option value="7">60</option>
                        </select>
                        <button class="btn btn-default btn-xs" onclick="cari()"><i
                                    class="fa fa-plus"></i>
                        </button>
                    </div>
                    <div class="col-md-1"><span>Merek :</span></div>
                    <div class="col-md-4">
                        <select class="col-md-6" data-live-search="true" data-width="100%" required=""
                                id="kode_merek" name="kode_merek">
                            <option value="3"></option>
                            <option value="4">7</option>
                            <option value="5">14</option>
                            <option value="6">30</option>
                            <option value="7">60</option>
                        </select>
                        <button class="btn btn-default btn-xs" onclick="cari()"><i
                                    class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div>
                    <div class="col-md-2" align="right"><span>Mata Uang</span><span> :</span></div>
                    <div class="col-md-4">
                        <select class="col-md-6" data-live-search="true" data-width="100%" required=""
                                id="item_stok_min" name="item_stok_min">
                            <option value="3"></option>
                            <option value="4">7</option>
                            <option value="5">14</option>
                            <option value="6">30</option>
                            <option value="7">60</option>
                        </select>
                    </div>
                    <div class="col-md-10"><span></span></div>
                    <div class="col-md-11">
                    </div>
                </div>
                <div>
                    <div class="col-md-2" align="right"><span>Rak</span><span> :</span></div>
                    <div class="col-md-9">
                        <input type="text" id="kode_rak" name="kode_rak" class="input-sm"></input>
                    </div>
                </div>
                <div>
                    <div class="col-md-2" align="right"><span>Dept / Gudang</span><span> :</span></div>
                    <div class="col-md-4">
                        <select class="col-md-6" data-live-search="true" data-width="100%" required=""
                                id="kode_gudang" name="kode_gudang">
                            <option value="3"></option>
                            <option value="4">7</option>
                            <option value="5">14</option>
                            <option value="6">30</option>
                            <option value="7">60</option>
                        </select>
                    </div>
                    <div class="col-md-10"><span></span></div>
                    <div class="col-md-11">
                    </div>
                </div>
                <div>
                    <div class="col-md-2" align="right"><span>Ketarangan</span><span> :</span></div>
                    <div class="col-md-9">
                        <textarea id="item_ket" name="item_ket"></textarea>
                    </div>
                </div>
                <div>
                    <div class="col-md-2" align="right"><span>Tipe Item</span><span> :</span></div>
                    <div class="col-md-4">
                        <input type="radio" name="cek" value="pajak">Barang</input><br>
                        <input type="radio" name="cek" value="pajak">Jasa</input>
                    </div>
                    <div class="col-md-11"><span>&nbsp;</span></div>
                    <div class="col-md-11">
                        <span>&nbsp;</span>
                    </div>
                </div>
                <div>
                    <div class="col-md-2" align="right"><span>Pilihan</span><span> :</span></div>
                    <div class="col-md-4">
                        <input type="checkbox" name="cek" value="pajak">Barang</input><br>
                        <input type="checkbox" name="cek" value="pajak">Jasa</input><br>
                    </div>
                    <div class="col-md-11"><span>&nbsp;</span></div>
                    <div class="col-md-11">
                        <span>&nbsp;</span>
                    </div>
                </div>
                </form>
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
        $('#form-data').slideUp(500,'swing');
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
            url : link+"/ajax_edit/"+id,
            type: "GET",
            dataType: "JSON",
            success: function(result) {
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

<!--fungsi tambah-->
<!--<div class="row">-->
<!--    <div class="col-xs-12">-->
<!--        <div id="form-data" style="display:none;">-->
<!--            <div class="widget-box">-->
<!--                <div class="widget-header">-->
<!--                    <h4 class="widget-title">Form Daftar Pelanggan</h4>-->
<!---->
<!--                    <div class="widget-toolbar">-->
<!--                        <a href="#" data-action="collapse">-->
<!--                            <i class="ace-icon fa fa-chevron-up"></i>-->
<!--                        </a>-->
<!---->
<!--                        <a onclick="Batal()" data-action="close">-->
<!--                            <i class="ace-icon fa fa-times"></i>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="widget-body">-->
<!--                    <div class="widget-main">-->
<!--                        <div class="row">-->
<!--                            <div class="col-xs-12">-->
<!--                                <form class="form-horizontal" role="form" id="formAksi">-->
<!--                                    <input type="hidden" name="kode_item">-->
<!--                                    <div class="form-group">-->
<!--                                        <label class="col-sm-2 control-label no-padding-right" for="form-field-1">-->
<!--                                            Kode Item Tipe</label>-->
<!--                                        <div class="col-sm-10">-->
<!--                                            <input type="text" id="kode_item_tipe" name="kode_item_tipe"-->
<!--                                                   placeholder="" class="col-xs-10 col-sm-5"/>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="form-group">-->
<!--                                        <label class="col-sm-2 control-label no-padding-right" for="form-field-1">-->
<!--                                            Kode Item Jenis</label>-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <textarea class="form-control" id="kode_item_jenis" name="kode_item_jenis"-->
<!--                                                      placeholder="" class="col-xs-10 col-sm-5"></textarea>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="form-group">-->
<!--                                        <label class="col-sm-2 control-label no-padding-right" for="form-field-1">-->
<!--                                            Kode Merek</label>-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <textarea class="form-control" id="kode_merek" name="kode_merek"-->
<!--                                                      placeholder="" class="col-xs-10 col-sm-5"></textarea>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="form-group">-->
<!--                                        <label class="col-sm-2 control-label no-padding-right" for="form-field-1">-->
<!--                                            Kode Gudang</label>-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <textarea class="form-control" id="kode_gudang" name="kode_gudang"-->
<!--                                                      placeholder="" class="col-xs-10 col-sm-5"></textarea>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="form-group">-->
<!--                                        <label class="col-sm-2 control-label no-padding-right" for="form-field-1">-->
<!--                                            Kode Rak</label>-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <textarea class="form-control" id="kode_rak" name="kode_rak"-->
<!--                                                      placeholder="" class="col-xs-10 col-sm-5"></textarea>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="form-group">-->
<!--                                        <label class="col-sm-2 control-label no-padding-right" for="form-field-1">-->
<!--                                            Item Nama</label>-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <textarea class="form-control" id="item_nama" name="item_nama"-->
<!--                                                      placeholder="" class="col-xs-10 col-sm-5"></textarea>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="form-group">-->
<!--                                        <label class="col-sm-2 control-label no-padding-right" for="form-field-1">-->
<!--                                            Item Ket</label>-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <textarea class="form-control" id="item_ket" name="item_ket"-->
<!--                                                      placeholder="" class="col-xs-10 col-sm-5"></textarea>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="form-group">-->
<!--                                        <label class="col-sm-2 control-label no-padding-right" for="form-field-1">-->
<!--                                            Item Status Jual</label>-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <textarea class="form-control" id="item_status_jual" name="item_status_jual"-->
<!--                                                      placeholder="" class="col-xs-10 col-sm-5"></textarea>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="form-group">-->
<!--                                        <label class="col-sm-2 control-label no-padding-right" for="form-field-1">-->
<!--                                            Item Stok Min</label>-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <textarea class="form-control" id="item_stok_min" name="item_stok_min"-->
<!--                                                      placeholder="" class="col-xs-10 col-sm-5"></textarea>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!---->
<!---->
<!---->
<!--                                    <div class="col-md-offset-2 col-md-9">-->
<!--                                        <button class="btn btn-info" type="button" id="btn_save" onclick="save()">-->
<!--                                            <i class="ace-icon fa fa-check bigger-110"></i>-->
<!--                                            Submit-->
<!--                                        </button>-->
<!---->
<!--                                        &nbsp; &nbsp; &nbsp;-->
<!--                                        <button class="btn" type="reset">-->
<!--                                            <i class="ace-icon fa fa-undo bigger-110"></i>-->
<!--                                            Reset-->
<!--                                        </button>-->
<!---->
<!--                                    </div>-->
<!--                                </form>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div><!-- /.row -->
<!--            </div>-->
<!--        </div><!-- /.row -->
<!--    </div>-->
<!--</div>-->