<?php $title = "<i class='fa fa-file-text-o'></i>&nbsp;Datasheet"; ?>
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
                        Kata Kunci 1 :
                    </div>
                </div>
                <div class="col-xs-10">
                    <div class="form-group">
                        <input class="form-control" name="kata_kunci1" id="kata_kunci1" onfocus="cc()" type="text">
                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="col-xs-2">
                    <div class="form-group">
                        Kata Kunci 2 :
                    </div>
                </div>
                <div class="col-xs-2">
                    <div class="form-group">
                        <input class="form-control" name="kata_kunci2" id="kata_kunci2" onfocus="cc()" type="text">
                    </div>
                </div>
                <div class="col-xs-2">
                    <div class="form-group" align="left">
                    Jenis/Satuan/Rak
                    </div>
                </div>
                <div class="col-xs-1">
                    <div class="form-group">
                    Merek :
                    </div>
                </div>
                <div class="col-xs-1">
                    <div class="form-group">
                    <select name="merek">
                    	<option value="#">&nbsp;</option>
                    </select>
                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="col-xs-2">
                    <div class="form-group">
                        Tipe Harga Jual :
                    </div>
                </div>
                <div class="col-xs-10">
                    <div class="form-group">
                		<input type="radio" name="tipe_item" value="Barang">Tanpa Harga
                		<input type="radio" name="tipe_item" value="Rakitan">Satu Harga
                		<input type="radio" name="tipe_item" value="Non inventori">Satuan
                		<input type="radio" name="tipe_item" value="Jasa">Jumlah
                		<input type="radio" name="tipe_item" value="Semua">Level Harga
                    </div>
                </div>
            </div>
                <button class="btn btn-default" onclick="search_table()"><i class="fa fa-search"> </i></button>                                    
                <button class="btn btn-default" onclick="search_table()"><i class="fa fa-refresh"> </i></button> <br>                                   
            </div>
      <table id="dynamic-table" class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>Kode Item</th>
            <th>Nama Item</th>
            <th>Jenis</th>
            <th>Merek</th>
            <th>Rak</th>
            <th>Tipe Item</th>
            <th>Satuan</th>
            <th>Harga Pokok</th>
            <th>Harga Jual</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody></tbody>
</table>
  <button class="btn btn-danger" onclick="Tambah()" ><i class="fa fa-plus"></i> Tambah Data</button>
<br>
        <button class="btn btn-default" onclick="search_table()"><i class="fa fa-save"> Simpan</i></button>                                    
        <button class="btn btn-default" onclick="search_table()"><i class="fa fa-close"> Batal</i></button>                                    
        <button class="btn btn-default" onclick="search_table()"><i class="fa fa-download"> Export Excel</i></button>                                    
        <button class="btn btn-default" onclick="search_table()"><i class="fa fa-upload"> Import Excel</i></button>                                    
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