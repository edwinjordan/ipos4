<?php $title = "<i class='fa fa-tags'></i>&nbsp;Daftar Penjualan"; ?>
<div id="idImgLoader" style="margin: 0 auto; text-align: center;">
  <img src='<?php echo base_url();?>assets/img/loader-dark.gif' />
</div>
<div id="data" style="display:none;">
<section class="content">
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

  <form action="http://www.toko73wp.com/pembelian/pembelian_simpan" method="post" accept-charset="utf-8" class="form-horizontal" enctype="multipart/form-data">
            
            <div class="col-xs-12">
              <div class="col-xs-2">
                <div class="form-group">
                  Kata Kunci :
                </div>
              </div>
              <div class="col-xs-8">
                <div class="form-group">
                  <!-- <a data-toggle="modal" href="#modal-1"> -->
                    <input class="form-control" name="kode_supplier" id="kode_supplier" value="2" type="hidden">
                    <input class="form-control" name="supplier" id="nama_supplier" onfocus="cc()" required="" type="text">
                  <!-- </a> -->
                </div>
              </div>
              <div class="col-xs-2">
                <div class="form-group">
                  <button class="btn btn-default btn-sm"><i class="fa fa-search" aria-hidden="true"></i>
</button>
                  <button class="btn btn-default btn-sm"><i class="fa fa-refresh" aria-hidden="true"></i>

</button>
                </div>
              </div>
            </div>
           
            <div class="col-xs-12">
              <div class="col-xs-2">
                <div class="form-group">
                  Dept / Gudang :
                </div>
              </div>
              <div class="col-xs-2">
                <div class="form-group">
                  <select name="jenis_faktur" id="jenis_faktur" class="form-control" data-live-search="true" data-width="100%" required="" onchange="javascript:selectfaktur()">
                          <option value="UTM">UTM</option>
                          <option value="GD">GD</option>
                  </select>
                </div>
              </div>
              <div class="col-xs-4">
                <div class="form-group">
                  <p align="center"> Tampilkan Data Selama :</p>
                </div>
              </div>
              <div class="col-xs-1">
                <div class="form-group">
                  <select class="form-control" data-live-search="true" data-width="100%" required="" name="id_top">
                                                        <option value="7">7 </option>
                                                        <option value="10">14 </option>
                                                        <option value="30">30 </option>
                                                        <option value="45">45 </option>
                                                        <option value="120">120 </option>
                                                       
                                                       
                                      </select>
                </div>
              </div>
              <div class="col-xs-3">
                <div class="form-group">
                  Hari Terakhir
                </div>
              </div>
        </div>
       
  </form>

  <button class="btn btn-default" onclick="reload_table()"><i class="fa fa-refresh"></i> Reload</button>
   <a href="<?php echo base_url('Daftar_Penjualan/tambah') ?>"><button class="btn btn-default" onclick="Tambah()"><i class="fa fa-plus"></i> Tambah Data</button></a>
</div><br />
<table id="dynamic-table" class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>No. Transaksi</th>
            <th>Tanggal</th>
            <th>Kode Pelanggan</th>
            <th>Nama Pelanggan</th>
            <th>Sales</th>
            <th>Mata Uang</th>
            <th>No Faktur Pajak</th>
            <th>Keterangan</th>
            <th>Total</th>
            <th>Komputer</th>
            <th>User Buat</th>
            <th>User Ubah</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody></tbody>
</table>
</div><!-- /.span -->
</div>          
</div><!-- /.row -->
</div>
</div>
</div>

<script>
  var zonk=''; 
  var save_method;
  var link = "<?php echo site_url('Daftar_Penjualan')?>";
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
            "url": "<?php echo site_url('Daftar_Penjualan/ajax_list')?>",
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