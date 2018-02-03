<?php $title = "<i class='fa fa-file-text-o'></i>&nbsp;Kartu Stok"; ?>
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
                <div class="col-xs-1">
                    <div class="form-group">
                        Kode Item :
                    </div>
                </div>
                <div class="col-xs-2">
                    <div class="form-group">
                        <input class="form-control" name="kode" id="Kode_Item" onfocus="cc()" type="text">
                    </div>
                </div>
                <div class="col-xs-1">
                    <div class="form-group">
                        <button class="btn btn-default" onclick="Kode_Item()"><i class="fa fa-folder"></i></button>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="form-group">
                        <input class="form-control" name="kode" id="Kode_Item" onfocus="cc()" type="text">
                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="col-xs-1">
                    <div class="form-group">
                        Periode :
                    </div>
                </div>
                <div class="col-xs-1">
                    <div class="form-group">
                    <select name="bulan">
                    	<option value="#">Januari</option>
                    </select>
                    </div>
                </div>
                <div class="col-xs-1">
                    <div class="form-group">
                    <select name="bulan">
                    	<option value="#">2018</option>
                    </select>
                    </div>
                </div>
                <div class="col-xs-1">
                    <div class="form-group">
                    Gudang :
                    </div>
                </div>
                <div class="col-xs-1">
                    <div class="form-group">
                    <select name="bulan">
                    	<option value="#">UTM</option>
                    </select>
                    </div>
                </div>
                <div class="col-xs-1">
                    <div class="form-group">
                        <button class="btn btn-default" onclick="Kode_Item()"><i class="fa fa-gear"> Proses</i></button>
                    </div>
                </div>
            </div>
            </div>
      <table id="dynamic-table" class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>No Transaksi</th>
            <th>Kantor</th>
            <th>Tanggal</th>
            <th>Tipe</th>
            <th>Keterangan</th>
            <th>Masuk</th>
            <th>keluar</th>
            <th>Saldo</th>
            <th>Supplier/Pelanggan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody></tbody>
</table>
<button class="btn btn-danger" onclick="Tambah()" ><i class="fa fa-plus"></i> Tambah Data</button>
  <br>
            <div class="col-xs-12">
                <div class="col-xs-1">
                    <div class="form-group">
                        Total Masuk :
                    </div>
                </div>
                <div class="col-xs-2">
                    <div class="form-group">
                        <input class="form-control" name="total_masuk" id="total_masuk" onfocus="cc()" type="text">
                    </div>
                </div>
                <div class="col-xs-1">
                    <div class="form-group">
                        Saldo Awal :
                    </div>
                </div>
                <div class="col-xs-2">
                    <div class="form-group">
                        <input class="form-control" name="saldo_awal" id="saldo_awal" onfocus="cc()" type="text">
                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="col-xs-1">
                    <div class="form-group">
                        Total Keluar :
                    </div>
                </div>
                <div class="col-xs-2">
                    <div class="form-group">
                        <input class="form-control" name="total_keluar" id="total_keluar" onfocus="cc()" type="text">
                    </div>
                </div>
                <div class="col-xs-1">
                    <div class="form-group">
                        Saldo Akhir :
                    </div>
                </div>
                <div class="col-xs-2">
                    <div class="form-group">
                        <input class="form-control" name="saldo_akhir" id="saldo_akhir" onfocus="cc()" type="text">
                    </div>
                </div>
                <div class="col-xs-1">
                    <div class="form-group">
                        <button class="btn btn-default" onclick="print()"><i class="fa fa-print"> Cetak</i></button>
                    </div>
                </div>
            </div>
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
	var link = "<?php echo site_url('Pesanan_Pembelian')?>";
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
            "url": "<?php echo site_url('Pesanan_Pembelian/ajax_list')?>",
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