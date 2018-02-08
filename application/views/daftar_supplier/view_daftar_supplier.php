<?php $title = "<i class='fa fa-file-text-o'></i>&nbsp;Daftar Supplier"; ?>
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
            <th>Provinsi</th>
            <th>Kota</th>
            <th>Kecamatan</th>
            <th>Kode Pos</th>
            <th>Fax</th>
            <th>Telepon</th>
            <th>Email</th>
            <th>No HP</th>
            <th>No Rek</th>
            <th>Pemilik Rek</th>
            <th>Bank</th>
            <th>Keterangan</th>
            <th>Jatuh Tempo</th>
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
    var zonk=''; 
    var save_method;
    var link = "<?php echo site_url('Daftar_supplier')?>";
    var table;

    $(document).ready(function(){
      //$('#idImgLoader').show(2000);
      $('#idImgLoader').fadeOut(2000);
      setTimeout(function(){
            data();
      }, 2000);
    });

    function data(){
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
            "url": "<?php echo site_url('Daftar_supplier/ajax_list')?>",
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

  function reload_table() {
      table.ajax.reload(null, false);
  }
  
  function Batal() { 
    $('#form-data').slideUp(500,'swing');
    $('#panel-data').fadeIn(1000); 
  }
  
  function Tambah() {
    save_method = 'add'; 
    $('#panel-data').fadeOut('slow');
    $('#form-data').fadeIn('slow'); 
    document.getElementById('formAksi').reset();
  }
  
  function save() {
      $('#btn_save').text('Saving...');
      $('#btn_save').attr('disabled', true);

      var url;
      if (save_method == 'add') {
        url = link+"/ajax_add";
      } else {
        url = link+"/ajax_update"; 
      }
      tinyMCE.triggerSave();
      $.ajax({
        url: url,
        type: "POST",
        data: $('#formAksi').serialize(),
        dataType: "JSON",
        success: function(result) {
          if (result.status) {
            
              setTimeout(function(){
                Batal();
              }, 1000);
            
            setTimeout(function(){
              reload_table();
            }, 1000);
          }
          setTimeout(function(){
            $('#btn_save').text('Save');
            $('#btn_save').attr('disabled', false);
            document.getElementById('formAksi').reset();
          }, 1000);
          swal_berhasil(); 
          setTimeout(function(){
              reload_table();
          }, 1000);
        }, error: function(jqXHR, textStatus, errorThrown) {
          // alert('Error adding/update data');
          swal({ title:"ERROR", text:"Error adding / update data", type: "warning", closeOnConfirm: true}); 
          $('#btnSave').text('save'); $('#btnSave').attr('disabled',false);  
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
          $('[name="kode_supplier"]').val(result.kode_supplier);
          $('[name="supplier_nama"]').val(result.supplier_nama);
          $('[name="supplier_alamat"]').val(result.supplier_alamat);
          $('[name="kode_provinsi"]').val(result.kode_provinsi);
          $('[name="kode_kota"]').val(result.kode_kota);
          $('[name="kode_kecamatan"]').val(result.kode_kecamatan);
          $('[name="supplier_kodepos"]').val(result.supplier_kodepos);
          $('[name="supplier_fax"]').val(result.supplier_fax);
          $('[name="supplier_telpon"]').val(result.supplier_telpon);
          $('[name="supplier_email"]').val(result.supplier_email);
          $('[name="supplier_nohp"]').val(result.supplier_nohp);
          $('[name="supplier_norek"]').val(result.supplier_norek);
          $('[name="supplier_rekan"]').val(result.supplier_rekan);
          $('[name="supplier_bank"]').val(result.supplier_bank);
          $('[name="supplier_ket"]').val(result.supplier_ket);
          $('[name="supplier_jatuhtempo"]').val(result.supplier_jatuhtempo);
        }, error: function (jqXHR, textStatus, errorThrown) {
          alert('Error get data from ajax');
        }
      });
  }
  
  function hapus(id) {
    if (confirm('Are you sure delete this data?')) {
      $.ajax ({
        url : "<?php echo site_url('Daftar_Supplier/ajax_delete')?>/"+id,
        type: "POST",
        dataType: "JSON",
        success: function(data) {
          setTimeout(function(){
                        Batal();
                    }, 1000);
          
          setTimeout(function(){
                        reload_table();
          }, 1000);
          swal_berhasil(); 
        }, error: function (jqXHR, textStatus, errorThrown) {
          swal({ title:"ERROR", text:"Error delete data", type: "warning", closeOnConfirm: true}); 
          $('#btnSave').text('save'); $('#btnSave').attr('disabled',false); 
        }
      });
    }
  }
</script> 

<div class="row">
<div class="col-xs-12">
<div id="form-data" style="display:none;">
<div class="widget-box">
<div class="widget-header">
    <h4 class="widget-title">Form Entry Daftar Supplier</h4>

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
  <div class="form-group">
  <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Kode </label>
    <div class="col-sm-10">
      <input type="text" id="kode_supplier" name="kode_supplier" placeholder="Kode" class="col-xs-10 col-sm-5" />
    </div>
  </div>
  <div class="form-group">
  <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Nama </label>
    <div class="col-sm-10">
      <input type="text" id="supplier_nama" name="supplier_nama" placeholder="nama" class="col-xs-10 col-sm-5" />
    </div>
  </div>
  <div class="form-group">
  <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Alamat </label>
    <div class="col-sm-10">
      <input type="text" id="supplier_alamat" name="supplier_alamat" placeholder="Alamat" class="col-xs-10 col-sm-5" />
    </div>
  </div>
  <div class="form-group">
  <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Kode Provinsi </label>
    <div class="col-sm-10">
      <input type="text" id="kode_provinsi" name="kode_provinsi" placeholder="Kode Provinsi" class="col-xs-10 col-sm-5" />
    </div>
  </div>
  <div class="form-group">
  <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Kode Kota </label>
    <div class="col-sm-10">
      <input type="text" id="kode_kota" name="kode_kota" placeholder="Kode Kota" class="col-xs-10 col-sm-5" />
    </div>
  </div>
  <div class="form-group">
  <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Kode Kecamatan </label>
    <div class="col-sm-10">
      <input type="text" id="kode_kecamatan" name="kode_kecamatan" placeholder="Kode Kecamatan" class="col-xs-10 col-sm-5" />
    </div>
  </div>
  <div class="form-group">
  <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Kode Pos </label>
    <div class="col-sm-10">
      <input type="text" id="supplier_kodepos" name="supplier_kodepos" placeholder="Kode Pos" class="col-xs-10 col-sm-5" />
    </div>
  </div>
  <div class="form-group">
  <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Fax </label>
    <div class="col-sm-10">
      <input type="text" id="supplier_fax" name="supplier_fax" placeholder="Fax" class="col-xs-10 col-sm-5" />
    </div>
  </div>
  <div class="form-group">
  <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Telepon </label>
    <div class="col-sm-10">
      <input type="text" id="supplier_telpon" name="supplier_telpon" placeholder="Telepon" class="col-xs-10 col-sm-5" />
    </div>
  </div>
  <div class="form-group">
  <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Email </label>
    <div class="col-sm-10">
      <input type="text" id="supplier_email" name="supplier_email" placeholder="Email" class="col-xs-10 col-sm-5" />
    </div>
  </div>
  <div class="form-group">
  <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> No HP </label>
    <div class="col-sm-10">
      <input type="text" id="supplier_nohp" name="supplier_nohp" placeholder="No HP" class="col-xs-10 col-sm-5" />
    </div>
  </div>
  <div class="form-group">
  <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> No Rekening </label>
    <div class="col-sm-10">
      <input type="text" id="supplier_norek" name="supplier_norek" placeholder="No Rekening" class="col-xs-10 col-sm-5" />
    </div>
  </div>
  <div class="form-group">
  <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Rekan </label>
    <div class="col-sm-10">
      <input type="text" id="supplier_rekan" name="supplier_rekan" placeholder="Rekan" class="col-xs-10 col-sm-5" />
    </div>
  </div>
  <div class="form-group">
  <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Bank </label>
    <div class="col-sm-10">
      <input type="text" id="supplier_bank" name="supplier_bank" placeholder="Kode Supplier" class="col-xs-10 col-sm-5" />
    </div>
  </div>
  <div class="form-group">
  <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Keterangan </label>
    <div class="col-sm-10">
      <input type="text" id="supplier_ket" name="supplier_ket" placeholder="Keterangan" class="col-xs-10 col-sm-5" />
    </div>
  </div>
  <div class="form-group">
  <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Jatuh Tempo </label>
    <div class="col-sm-10">
      <input type="text" id="supplier_jatuhtempo" name="supplier_jatuhtempo" placeholder="Jatuh Tempo" class="col-xs-10 col-sm-5" />
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
