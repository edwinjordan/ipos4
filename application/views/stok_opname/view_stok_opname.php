<?php $title = "<i class='fa fa-file-text-o'></i>&nbsp;Saldo Awal Item"; ?>
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
              <div class="col-xs-1">
                <div class="form-group">
                  Tanggal
                </div>
              </div>
              <div class="col-xs-4">
                <div class="form-group" style="color:red;">
                <select>
                	<option>18/01/2018</option>
                </select>
                Stok Dihitung Sampai Tanggal : 01-01-2018 23:59:59
                </div>
              </div>
              <div class="col-xs-5" align="center">
                <div class="form-group">
                  &nbsp;
                </div>
              </div>
              <div class="col-xs-1">
                <div class="form-group">
                  Jam
                </div>
              </div>
              <div class="col-xs-1">
                <div class="form-group">
                  <input class="form-control" name="jam" value="<?php echo date('h:i:sa')?>" readonly="" type="text">
                </div>
              </div>
              </div>

              <div class="col-xs-12">
              <div class="col-xs-1">
                <div class="form-group">
                  Kode Akun
                </div>
              </div>
              <div class="col-xs-2">
                <div class="form-group" style="color:red;">
                <select>
                	<option>5-2200-PENGATURAN</option>
                </select>
                </div>
              </div>
              <div class="col-xs-7">
                <div class="form-group">
                  &nbsp;
                </div>
              </div>
              <div class="col-xs-1">
                <div class="form-group">
                  User
                </div>
              </div>
              <div class="col-xs-1">
                <div class="form-group">
                  <input class="form-control" name="user" value="admin" readonly="" type="text">
                </div>
              </div>
              </div>

              <div class="col-xs-12">
              <div class="col-xs-1">
                <div class="form-group">
                  Gudang
                </div>
              </div>
              <div class="col-xs-2">
                <div class="form-group">
                <select>
                	<option>UTM</option>
                </select>
                </div>
              </div>
              </div>
              <br>
              <br>

              <div class="col-xs-12">
              <div class="col-xs-1">
                <div class="form-group">
                  Kode Item
                </div>
              </div>
              <div class="col-xs-2">
                <div class="form-group">
                  <input class="form-control" name="kode1" type="text">
                </div>
              </div>
              <div class="col-xs-2">
                <div class="form-group">
                  <input class="form-control" name="kode2" type="text">
                </div>
              </div>
              </div>

              <div class="col-xs-12">
              <div class="col-xs-1">
                <div class="form-group">
                  Nama Item
                </div>
              </div>
              <div class="col-xs-4">
                <div class="form-group">
                  <input class="form-control" name="nama_item" type="text">
                </div>
              </div>
              </div>  

              <div class="col-xs-12">
              <div class="col-xs-1">
                <div class="form-group">
                  Satuan
                </div>
              </div>
              <div class="col-xs-2">
                <div class="form-group">
                  <input class="form-control" name="satuan" type="text">
                </div>
              </div>
              </div>  

              <div class="col-xs-12">
              <div class="col-xs-1">
                <div class="form-group">
                  Buku
                </div>
              </div>
              <div class="col-xs-2">
                <div class="form-group">
                  <input class="form-control" name="buku" value="0,00" type="text">
                </div>
              </div>
              </div>

              <div class="col-xs-12">
              <div class="col-xs-1">
                <div class="form-group">
                  Fisik
                </div>
              </div>
              <div class="col-xs-2">
                <div class="form-group">
                  <input class="form-control" name="fisik" value="0,00" type="text">
                </div>
              </div>
              </div>  

              <div class="col-xs-12">
              <div class="col-xs-1">
                <div class="form-group">
                  Selisih
                </div>
              </div>
              <div class="col-xs-2">
                <div class="form-group">
                  <input class="form-control" name="selisih" value="0,00" type="text">
                </div>
              </div>
              </div>  

              <div class="col-xs-12">
              <div class="col-xs-1">
                <div class="form-group">
                  &nbsp;
                </div>
              </div>
              <div class="col-xs-2">
                <div class="form-group" style="color:red;">
                </div>
              </div>
              </div>  
             </div>  
				  <button class="btn btn-default" onclick="reload_table()"><i class="fa fa-save"></i> Simpan Opname</button>
	            <button class="btn btn-default" onclick="simpan()" ><i class="fa fa-table"> Tampil Data Opname</i> </button>
	            <button class="btn btn-default" onclick="import()" ><i class="fa fa-upload"> Import Excel</i> </button>
  </form>
</div><br />
<br>

		</div>          
	</div><!-- /.row -->
</div>
</div>
</div>
<script>
  
      // $(document).ready(function(){
      //   $("#tanggal").datepicker();
      // });

  var zonk=''; 
  var save_method;
  var link = "<?php echo site_url('Daftar_Pembelian')?>";
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