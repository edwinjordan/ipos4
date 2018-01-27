<?php $title = "<i class='fa fa-file-image-o'></i>&nbsp;Tambah Daftar Pembayaran Piutang Penjualan"; ?>
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
           		<div class="col-xs-2">
           			<div class="form-group">
           				No Transaksi
           			</div>
           		</div>
           		<div class="col-xs-2">
           			<div class="form-group">
	           			<!-- <a data-toggle="modal" href="#modal-1"> -->
	           				<input class="form-control" name="kode_supplier" id="kode_supplier" type="hidden">
			           		<input class="form-control" name="supplier" id="nama_supplier" onfocus="cc()" required="" type="text">

			           	<!-- </a> -->
		           	</div>

           		</div>
           		<div class="col-xs-2">
	           		<div class="form-group">
	           			Pelanggan
           			</div>
           		</div>
           		<div class="col-xs-2">
           			<div class="form-group">
						<select name="jenis_faktur" id="jenis_faktur" class="form-control" data-live-search="true" data-width="100%" required="" onchange="javascript:selectfaktur()">
							<option value=""></option>
							<option value=""></option>
						</select>
					</div>
           		</div>
           		<div class="col-xs-1">
           			<div class="form-group">
           				<button class="btn btn-default btn-sm"><i class="fa fa-search" aria-hidden="true"></i></button>
           			</div>           			
           		</div>
		    </div>
			<!---->
			<div class="col-xs-12">
				<div class="col-xs-2">
					<div class="form-group">
						Kode Akun
					</div>
				</div>
				<div class="col-xs-2">
					<div class="form-group">
						<select name="jenis_faktur" id="jenis_faktur" class="form-control" data-live-search="true" data-width="100%" required="" onchange="javascript:selectfaktur()">
							<option value=""></option>
							<option value=""></option>
						</select>
					</div>
				</div>
			</div>
			<!---->
			<div class="col-xs-12">
				
				<div class="col-xs-2">
					<div class="form-group">
						Cara Bayar
					</div>
				</div>
				<div class="col-xs-2">
					<div class="form-group">
						<select name="jenis_faktur" id="jenis_faktur" class="form-control" data-live-search="true" data-width="100%" required="" onchange="javascript:selectfaktur()">
							<option value=""></option>
							<option value=""></option>
						</select>
					</div>
				</div>
				<div class="col-xs-2">
					<div class="form-group">
						Tanggal
					</div>
				</div>
				<div class="col-xs-2">
					<div class="form-group">
						<select name="jenis_faktur" id="jenis_faktur" class="form-control" data-live-search="true" data-width="100%" required="" onchange="javascript:selectfaktur()">
							<option value=""></option>
							<option value=""></option>
						</select>
					</div>
				</div>
				<div class="col-xs-2">
           			<div class="form-group">
           				Nomor
           			</div>
           		</div>
           		<div class="col-xs-2">
           			<div class="form-group">
	           			<!-- <a data-toggle="modal" href="#modal-1"> -->
	           				<input class="form-control" name="kode_supplier" id="kode_supplier" type="hidden">
			           		<input class="form-control" name="supplier" id="nama_supplier" onfocus="cc()" required="" type="text">

			           	<!-- </a> -->
		           	</div>

           		</div>
			</div>
			<!---->
			<div class="col-xs-12">
				<div class="col-xs-2">
					<div class="form-group">
						Jam
					</div>
				</div>
				<div class="col-xs-2">
					<div class="form-group">
						<input class="form-control" name="kode_supplier" id="kode_supplier" type="hidden">
			           		<input class="form-control" name="supplier" id="nama_supplier" onfocus="cc()" required="" type="text">
					</div>
				</div>
				<div class="col-xs-2">
					<div class="form-group">
						User
					</div>
				</div>
				<div class="col-xs-2">
					<div class="form-group">
						<input class="form-control" name="kode_supplier" id="kode_supplier" type="hidden">
			           		<input class="form-control" name="supplier" id="nama_supplier" onfocus="cc()" required="" type="text">
					</div>
				</div>
				<div class="col-xs-2">
					<div class="form-group">
						Admin
					</div>
				</div>
				<div class="col-xs-2">
					<div class="form-group">
						<input class="form-control" name="kode_supplier" id="kode_supplier" type="hidden">
			           		<input class="form-control" name="supplier" id="nama_supplier" onfocus="cc()" required="" type="text">
					</div>
				</div>
			</div>	
			<!---->
<div class="col-xs-12">
<div class="box-header">
	<!--<button class="btn btn-default" onclick="reload_table()"><i class="fa fa-refresh"></i> Reload</button>
	<button class="btn btn-danger" onclick="Tambah()"><i class="fa fa-plus"></i> Tambah Data</button>-->
</div><br />
<table id="dynamic-table" class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>No Transaksi</th>
            <th>Tanggal</th>
			<th>Tanggal JT</th>
            <th>Sisa</th>
            <th>Potingan</th>
			<th>Total</th>
            <th>Jumlah Bayar</th>
        </tr>
    </thead>
    <tbody></tbody>
</table>
</div><!-- /.span -->
<div class="col-xs-12" style="padding-top: 10px;">

	<div class="col-xs-5">
		<div class="form-group">
			<button class="btn btn-default btn-sm" onclick="reload_table()">Hapus Detail</button>
		</div>		
	</div>			
</div>
<!---->
<div class="col-xs-12">
	<div class="col-xs-1">
		<div class="form-group">
			Keterangan
		</div>
	</div>
	<div class="col-xs-4">
		<div class="form-group">
		   
		    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
		  </div>

	</div>
	<div class="col-xs-3">
		
	</div>
	<div class="col-xs-2">
		<div class="form-group">
			Total Bayar
		</div>
	</div>
	<div class="col-xs-2">
		<div class="form-group">
			<!-- <a data-toggle="modal" href="#modal-1"> -->
			<input class="form-control" name="kode_supplier" id="kode_supplier" type="hidden">
			<input class="form-control" name="supplier" id="nama_supplier" onfocus="cc()" required="" type="text">

		<!-- </a> -->
		</div>

	</div>
</div>
<!---->
<div class="col-xs-12">
	<div class="col-xs-8">
	</div>
	<div class="col-xs-2">
		<font color="red"><b>Lunas</b></font>
	</div>
	<div class="col-xs-2">
		<div class="form-group">
			<input type="checkbox" class="form-check-input" id="exampleCheck1">
    		<label class="form-check-label" for="exampleCheck1"></label>
		</div>
	</div>
</div>
<!---->
<div class="col-xs-12">
	<div class="form-group">
		<button class="btn btn-default btn-sm"><i class="fa fa-plus-circle"></i> Tambah</button>
		<button class="btn btn-default btn-sm"><i class="fa fa-floppy-o"></i> Simpan</button>
		<button class="btn btn-default btn-sm"><i class="fa fa-undo"></i> Batal</button>
		<button class="btn btn-default btn-sm"><i class="fa fa-print"></i> Cetak</button>
	</div>	
</div>
<!---->
</div>
</div>					
</div><!-- /.row -->
</div>
</div>
</div>

<script>
	var zonk=''; 
	var save_method;
	var link = "<?php echo site_url('Tambah_Daftar_Pembayaran_Piutang_Penjualan')?>";
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
            "url": "<?php echo site_url('Tambah_Daftar_Pembayaran_Piutang_Penjualan/ajax_list')?>",
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