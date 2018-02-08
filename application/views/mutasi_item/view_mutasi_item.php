<?php $title = "<i class='fa fa-file-text-o'></i>&nbsp;Mutasi Item"; ?>
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
                        Dari Item 
                    </div>
                </div>
                <div class="col-xs-2">
                    <div class="form-group">
                        <input class="form-control" name="item" id="dari_item" onfocus="cc()" type="text">
                    </div>
                </div>
                <div class="col-xs-1">
                    <div class="form-group">
                        <button class="btn btn-xs" onclick="Kode_Item()"><i class="fa fa-search"></i></button>
                    </div>
                </div>
                <div class="col-xs-1">
                    <div class="form-group">
                    s/d
                    </div>
                </div>
                <div class="col-xs-2">
                    <div class="form-group">
                        <input class="form-control" name="item" id="dari_item" onfocus="cc()" type="text">
                    </div>
                </div>
                <div class="col-xs-1">
                    <div class="form-group">
                        <button class="btn btn-xs" onclick="Kode_Item()"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="col-xs-1">
                    <div class="form-group">
                        Dept./Gudang
                    </div>
                </div>
                <div class="col-xs-2">
                    <div class="form-group">
                    <select name="supplier" class="col-xs-12">
                        <option value="#">&nbsp;</option>
                    </select>
                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="col-xs-1">
                    <div class="form-group">
                        Jenis
                    </div>
                </div>
                <div class="col-xs-2">
                    <div class="form-group">
                    <select name="jenis" class="col-xs-12">
                    	<option value="#">&nbsp;</option>
                    </select>
                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="col-xs-1">
                    <div class="form-group">
                        Periode
                    </div>
                </div>
                <div class="col-xs-1">
                    <div class="form-group">
                    <select name="bulan">
                        <option value="#">Januari</option>
                    </select>
                    </div>
                </div>
                <div class="col-xs-2">
                    <div class="form-group">
                    <select name="tahun">
                        <option value="#">2018</option>
                    </select>
                    </div>
                </div>
            </div>
            </div>
                <button class="btn btn-default" onclick="search_table()"><i class="fa fa-gear"> Proses Bulanan</i></button>
                <button class="btn btn-default" onclick="search_table()"><i class="fa fa-gear"> Proses Mutasi</i></button>
                <br>
    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>Kode Item</th>
            <th>Nama Item</th>
            <th>Jenis</th>
            <th>Rak</th>
            <th>Satuan</th>
            <th>Jumlah Awal</th>
            <th>Total Awal</th>
            <th>Jumlah Masuk</th>
            <th>Total Masuk</th>
            <th>Jumlah Keluar</th>
            <th>Total Keluar</th>
            <th>Jumlah Akhir</th>
            <th>Total Akhir</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody></tbody>
</table>
<br>
Apabila Data Mutasi belum terhitung maka klik tombol <b>'PROSES BULANAN'</b>
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