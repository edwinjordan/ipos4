<?php $title = "<i class='fa fa-file-image-o'></i>&nbsp;Point Penjualan"; ?>
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
            
            <div class="col-xs-9">
              <div class="col-xs-2">
                <div class="form-group">
                  Periode Point
                </div>
              </div>
              <div class="col-xs-2">
                <div class="form-group">
                    <input id="tanggal" type="text" name="periode_awal">
                </div>
              </div>
              <div class="col-xs-1" align="center">
                <div class="form-group">
                  s/d
                </div>
              </div>
              <div class="col-xs-2">
                <div class="form-group">
                    <input id="tanggal1" type="text" name="periode_akhir">
                </div>
              </div>
              </div>
              <div class="col-xs-9">
              <div class="col-xs-2">
                <div class="form-group">
                  Pelanggan
                </div>
              </div>
              <div class="col-xs-1">
                <div class="form-group">
                  	<select class="form-control" data-live-search="true" data-width="100%" required="" name="pelanggan">
                        <option value=""> </option>
					</select>
                </div>
              </div>
              <div class="col-xs-1" align="center">
                <div class="form-group">
                    <button class="btn btn-search" onclick="cari()" ><i class="fa fa-search"></i> </button>
                </div>
              </div>
              <div class="col-xs-1">
                <div class="form-group">
                    <button class="btn btn-search" onclick="proses()" ><i class="fa fa-repeat"></i> Proses</button>
                </div>
              </div>
        </div>
    
  </form>
</div><br />
<table id="dynamic-table" class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>No. Transaksi</th>
            <th>Tipe Transaksi</th>
            <th>Tanggal</th>
            <th>Total Transaksi</th>
            <th>Point Transaksi</th>
        </tr>
    </thead>
    <tbody></tbody>
</table>
<br>
</div>
            <div class="col-xs-9">
              <div class="col-xs-2">
                <div class="form-group">
                  Sisa Point
                </div>
              </div>
              <div class="col-xs-2">
                <div class="form-group">
                  <input class="form-control" name="sisa" value="0,00" type="text">
                </div>
              </div>
              <div class="col-xs-2">
                <div class="form-group">
                    <button class="btn btn-search" onclick="edit()" ><i class="fa fa-download"></i> Ambil Point</button>
                </div>
              </div>
              <div class="col-xs-2">
                <div class="form-group">
                    <button class="btn btn-search" onclick="edit()" ><i class="fa fa-trash"></i> Hapus Ambil Point</button>
                </div>
              </div>
              </div>
</div>
</div>
</div>
</div>
</div>
</div>

<script>
  var zonk=''; 
  var save_method;
  var link = "<?php echo site_url('Point_Penjualan')?>";
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
            "url": "<?php echo site_url('Point_Penjualan/ajax_list')?>",
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