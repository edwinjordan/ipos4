<?php $title = "<i class='fa fa-tags'></i>&nbsp;Tampil Daftar Item"; ?>
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

	<button class="btn btn-default btn-sm"><i class="fa fa-plus-circle" aria-hidden="true"></i>
Tambah
</button>
<button class="btn btn-default btn-sm"><i class="fa fa-money" aria-hidden="true"></i>
Lihat Harga
</button>
<button class="btn btn-default btn-sm"><i class="fa fa-check-circle" aria-hidden="true"></i>
</i>
Pilih
</button>
</div><br />
<table id="dynamic-table" class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>Kode Item</th>
            <th>Barcode</th>
			<th>Nama Item</th>
			<th>Stok</th>
			<th>Satuan</th>
			<th>Rak</th>
			<th>Jenis</th>
			<th>Harga Jual</th>
			<th>Merek</th>
      <th>Tipe</th>
      <th>Keterangan</th>
      <th>Supplier</th>
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
	var link = "<?php echo site_url('Tampil_Daftar_Item')?>";
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
            "url": "<?php echo site_url('Tampil_Daftar_Item/ajax_list')?>",
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