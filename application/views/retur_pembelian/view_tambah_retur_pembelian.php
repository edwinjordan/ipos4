<?php $title = "<i class='fa fa-file-image-o'></i>&nbsp;Tambah Retur Pembelian"; ?>
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
           				Dari Item
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
	           			Dari
           			</div>
           		</div>
           		<div class="col-xs-2">
           			<div class="form-group">
						<select name="jenis_faktur" id="jenis_faktur" class="form-control" data-live-search="true" data-width="100%" required="" onchange="javascript:selectfaktur()">
							<option value="">GD</option>
							<option value="">UTM</option>
						</select>
					</div>
           		</div>

		    </div>
			<!---->
			<div class="col-xs-12">
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
						Supplier
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
						<a href="<?php echo base_url('Stok_Minimum/cekitem') ?>">
						<button class="btn btn-default btn-sm"><i class="fa fa-search" aria-hidden="true"></i></button></a>
					</div>
				</div>
				
				
			</div>
			<!---->
			<div class="col-xs-12">
				
				<div class="col-xs-2">
					<div class="form-group">
						No Trs Beli
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
						<a href="<?php echo base_url('Tambah_Retur_Pembelian/cekpembelian') ?>">
						<button class="btn btn-default btn-sm"><i class="fa fa-search" aria-hidden="true"></i></button></a>
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
	<!---->
	
<div class="box-header">
	<a href="<?php echo base_url('Tambah_Retur_Pembelian/pilihitemretur') ?>"><button class="btn btn-default" onclick="reload_table()"><i class="fa fa-archive"></i> Pilih Item Retur</button>
	<!--<button class="btn btn-danger" onclick="Tambah()"><i class="fa fa-plus"></i> Tambah Data</button>-->
</div><br />
<table id="dynamic-table" class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Item</th>
			<th>Keterangan</th>
            <th>Jumlah</th>
            <th>Satuan</th>
			<th>Harga</th>
            <th>Pot(%)</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody></tbody>
</table>

</div><!-- /.span -->
<div class="col-xs-12" style="padding-top: 10px;">

	<div class="col-xs-5">
		<div class="form-group">
			<button class="btn btn-default btn-sm" onclick="reload_table()">Hapus Detail</button>

			<button class="btn btn-default btn-sm"  onclick="reload_table()">Data Serial</button>
		</div>		
	</div>
	<div class="col-xs-1">			
	</div>
</div>
<div class="col-xs-12" style="padding-top: 10px;">
	<div class="col-xs-2">
		<div class="form-group">
			Keterangan
		</div>
	</div>
	<div class="col-xs-4">
		<div class="form-group">
			<input class="form-control" name="kode_supplier" id="kode_supplier" type="hidden">
			<input class="form-control" name="supplier" id="nama_supplier" onfocus="cc()" required="" type="text">
		</div>
	</div>

</div>
<!---->
<div class="col-xs-12">
	<div class="col-xs-2">
		<div class="form-group">
			Sub Total
		</div>
	</div>
	<div class="col-xs-1">
		<div class="form-group">
			<input class="form-control" name="kode_supplier" id="kode_supplier" type="hidden">
			<input class="form-control" name="supplier" id="nama_supplier" onfocus="cc()" required="" type="text">
		</div>
	</div>
	<div class="col-xs-3">
		<div class="form-group">
			<input class="form-control" name="kode_supplier" id="kode_supplier" type="hidden">
			<input class="form-control" name="supplier" id="nama_supplier" onfocus="cc()" required="" type="text">
		</div>
	</div>
	<div class="col-xs-1">
		<div class="form-group">
			
		</div>
	</div>
	<div class="col-xs-2">
		<div class="form-group">
			Total Akhir
		</div>
	</div>
	<div class="col-xs-2">
		<div class="form-group">
			<input class="form-control" name="kode_supplier" id="kode_supplier" type="hidden">
			<input class="form-control" name="supplier" id="nama_supplier" onfocus="cc()" required="" type="text">
		</div>
	</div>
	<div class="col-xs-1">
		<div class="form-group">
			
		</div>
	</div>
</div>
<!---->
<div class="col-xs-12">
	<div class="col-xs-2">
		<div class="form-group">
			Potongan
		</div>
	</div>
	<div class="col-xs-1">
		<div class="form-group">
			<input class="form-control" name="kode_supplier" id="kode_supplier" type="hidden">
			<input class="form-control" name="supplier" id="nama_supplier" onfocus="cc()" required="" type="text">
		</div>
	</div>
	<div class="col-xs-3">
		<div class="form-group">
			<input class="form-control" name="kode_supplier" id="kode_supplier" type="hidden">
			<input class="form-control" name="supplier" id="nama_supplier" onfocus="cc()" required="" type="text">
		</div>
	</div>
	<div class="col-xs-1">
		<div class="form-group">
			<button class="btn btn-default btn-sm"><i class="fa fa-pencil-square-o"></i></button>
		</div>
	</div>
	<div class="col-xs-2">
		<div class="form-group">
			Tunai
		</div>
	</div>
	<div class="col-xs-2">
		<div class="form-group">
			<input class="form-control" name="kode_supplier" id="kode_supplier" type="hidden">
			<input class="form-control" name="supplier" id="nama_supplier" onfocus="cc()" required="" type="text">
		</div>
	</div>
	<div class="col-xs-1">
		<div class="form-group">
			<button class="btn btn-default btn-sm"><i class="fa fa-pencil-square-o"></i></button>
		</div>
	</div>
</div>
<!---->
<div class="col-xs-12">
	<div class="col-xs-2">
		<div class="form-group">
			Pajak
		</div>
	</div>
	<div class="col-xs-1">
		<div class="form-group">
			<input class="form-control" name="kode_supplier" id="kode_supplier" type="hidden">
			<input class="form-control" name="supplier" id="nama_supplier" onfocus="cc()" required="" type="text">
		</div>
	</div>
	<div class="col-xs-3">
		<div class="form-group">
			<input class="form-control" name="kode_supplier" id="kode_supplier" type="hidden">
			<input class="form-control" name="supplier" id="nama_supplier" onfocus="cc()" required="" type="text">
		</div>
	</div>
	<div class="col-xs-1">
		<div class="form-group">
			<button class="btn btn-default btn-sm"><i class="fa fa-pencil-square-o"></i></button>
		</div>
	</div>
	<div class="col-xs-2">
		<div class="form-group">
			Pot Hutang
		</div>
	</div>
	<div class="col-xs-2">
		<div class="form-group">
			<input class="form-control" name="kode_supplier" id="kode_supplier" type="hidden">
			<input class="form-control" name="supplier" id="nama_supplier" onfocus="cc()" required="" type="text">
		</div>
	</div>
	<div class="col-xs-1">
		<div class="form-group">
			<button class="btn btn-default btn-sm"><i class="fa fa-pencil-square-o"></i></button>
		</div>
	</div>
</div>
<!---->
<div class="col-xs-12">
	<div class="col-xs-2">
		<div class="form-group">
			Biaya Lain
		</div>
	</div>
	<div class="col-xs-1">
		<div class="form-group">
			<button class="btn btn-default btn-sm"><i class="fa fa-money"></i></button>
		</div>
	</div>
	<div class="col-xs-3">
		<div class="form-group">
			<input class="form-control" name="kode_supplier" id="kode_supplier" type="hidden">
			<input class="form-control" name="supplier" id="nama_supplier" onfocus="cc()" required="" type="text">
		</div>
	</div>
	<div class="col-xs-1">
		<div class="form-group">
			<button class="btn btn-default btn-sm"><i class="fa fa-pencil-square-o"></i></button>
		</div>
	</div>
	<div class="col-xs-2">
		<div class="form-group">
			
		</div>
	</div>
	<div class="col-xs-2">
		<button class="btn btn-default btn-sm"><i class="fa fa-university"></i> Potong Hutang</button>
	</div>
	<div class="col-xs-1">
		<div class="form-group">
			
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
</div><!-- /.row -->
	
</div>		
</div>
</div>
</div>

<script>
	var zonk=''; 
	var save_method;
	var link = "<?php echo site_url('Tambah_Retur_Pembelian')?>";
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
            "url": "<?php echo site_url('Tambah_Retur_Pembelian/ajax_list')?>",
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