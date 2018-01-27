<?php $title = "<i class='fa fa-file-image-o'></i>&nbsp;Tambah Pesanan Pembelian"; ?>
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
	<form action="http://toko73wp.com/pembelian/pembelian_simpan" method="post" accept-charset="utf-8" enctype="multipart/form-data">
            
           	<div class="col-xs-12">
           		<div class="col-xs-2">
           			<div class="form-group">
           				No Transaksi
           			</div>
           		</div>
           		<div class="col-xs-2">
           			<div class="form-group">
	           			<!-- <a data-toggle="modal" href="#modal-1"> -->
	           				<input type="hidden" class="form-control" name="kode_supplier" id="kode_supplier">
			           		<input type="text" class="form-control" name="supplier" id="nama_supplier" onfocus="cc()" required="">
			           	<!-- </a> -->
		           	</div>
           		</div>
           		<div class="col-xs-2">
           			<div class="form-group">
           				Masuk ke
           			</div>
           		</div>
           		<div class="col-xs-2">
           			<div class="form-group">
		           		<select name="jenis_faktur" id="jenis_faktur" class="form-control" data-live-search="true" data-width="100%" required="" onchange="javascript:selectfaktur()">
	                        <option value="beli">UTM</option>
	                        <option value="bebas">GD</option>
	                    </select>
		           	</div>
           		</div>
           		<div class="col-xs-2">
           			<div class="form-group">
           				Jenis
           			</div>
           		</div>
           		<div class="col-xs-2">
           			<div class="form-group">
		           		<select name="jenis_faktur" id="jenis_faktur" class="form-control" data-live-search="true" data-width="100%" required="" onchange="javascript:selectfaktur()">
	                        <option value="beli">Pembelian</option>
	                        <option value="bebas">Penjualan</option>
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
		           		<input class="form-control" type="text" value="2018-01-22 16:10" name="tgl_nota_supplier_pembelian" id="reservation">
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
	                        <option value="beli"></option>
	                        <option value="bebas"></option>
	                    </select>
	                    
		           	</div>

           		</div>
           		<div class="col-xs-1">
           			<div class="form-group">
		           		<a href="<?php echo base_url('Tambah_Pesanan_Pembelian/ceksupplier') ?>"><button class="btn btn-default btn-sm"><i class="fa fa-search" aria-hidden="true"></i></button></a>
		           	</div>
		           	
           		</div>
	     	
           		           		
		    </div>
		    
        <div class="form-group">
		</div>
		
        </form>
        <a href="<?php echo base_url('Tambah_Pesanan_Pembelian/cekstok') ?>"><button class="btn btn-default"><i class="fa fa-cog"></i> Cek Stok Minimum</button></a>
<!--<div class="box-header">
	<button class="btn btn-default" onclick="reload_table()"><i class="fa fa-refresh"></i> Reload</button>
	<button class="btn btn-danger" onclick="Tambah()"><i class="fa fa-plus"></i> Tambah Data</button>
</div>--><br />
<table id="dynamic-table" class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>No.</th>
            <th>Kode Item</th>
			<th>Keterangan</th>
			<th>Jumlah Pesanan</th>
			<th>Jumlah Sudah Terima</th>
			<th>Satuan</th>
			<th>Harga</th>
			<th>Potongan</th>
			<th>Total</th>
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
	<form>
		<div class="form-group">
	        <a type="button" onclick="tampil_tambah()" id="btn_tmbh_brang" class="btn btn-primary">Hapus Detail </a>
	        <a type="button" onclick="tampil_tambah()" id="btn_tmbh_brang" class="btn btn-primary">Detail Item </a>
		</div>
		
		<div class="col-lg-12">
			<div class="col-md-6">
				<div class="col-xs-2">
           	<div class="form-group">
           				Tanggal
           	</div>
        </div>
        <div class="col-xs-3">
           	<div class="form-group">
		        <input class="form-control" type="text" value="2018-01-22 16:10" name="tgl_nota_supplier_pembelian" id="reservation">
		    </div>
        </div>
        
        
			</div>
			<div class="col-xs-1">
				<div class="form-group">
           			Sub Total Item
          		</div>
			</div>
			<div class="col-xs-2">
		           	<div class="form-group">
				        <input class="form-control" autocomplete="off" type="text" name="keterangan_pembelian">
				    </div>
        	</div>
        	<div class="col-xs-1">
				<div class="form-group">
           			Sub Total
          		</div>
			</div>
			<div class="col-xs-2">
		           	<div class="form-group">
				        <input class="form-control" autocomplete="off" type="text" name="keterangan_pembelian">
				    </div>
        	</div>
		</div>
		<div class="col-lg-12">
			<div class="col-md-6">
				<div class="col-xs-2">
           	<div class="form-group">
           				Keterangan
           	</div>
        </div>
        <div class="col-xs-3">
           	<div class="form-group">
		        <input class="form-control" type="text" value="" name="tgl_nota_supplier_pembelian" id="reservation">
		    </div>
        </div>
        
        
			</div>
			<div class="col-xs-1">
				<div class="form-group">
           			Potongan
          		</div>
			</div>
			<div class="col-xs-2">
		           	<div class="form-group">
				        <input class="form-control" autocomplete="off" type="text" name="keterangan_pembelian">
				    </div>
        	</div>
        	<div class="col-xs-1">
				<div class="form-group">
           			DP/PO
          		</div>
			</div>
			<div class="col-xs-2">
		           	<div class="form-group">
				        <input class="form-control" autocomplete="off" type="text" name="keterangan_pembelian">
				    </div>
        	</div>
		</div>
		
		<div class="col-lg-12">
			<div class="col-md-4">
				
        
        
        
			</div>
			<div class="col-xs-1">
				<div class="form-group">
           			Potongan
          		</div>
			</div>
			<div class="col-xs-1">
		           	<div class="form-group">
				        <input class="form-control" autocomplete="off" type="text" name="keterangan_pembelian">
				    </div>
        	</div>
			<div class="col-xs-2">
		           	<div class="form-group">
				        <input class="form-control" autocomplete="off" type="text" name="keterangan_pembelian">
				    </div>
        	</div>
        	<div class="col-xs-1">
				<div class="form-group">
           			Titip/DP
          		</div>
			</div>
			<div class="col-xs-1">
		           	<div class="form-group">
				        <input class="form-control" autocomplete="off" type="text" name="keterangan_pembelian">
				    </div>
        	</div>
			<div class="col-xs-2">
		           	<div class="form-group">
				        <input class="form-control" autocomplete="off" type="text" name="keterangan_pembelian">
				    </div>
        	</div>
		</div>
		<div class="col-lg-12">
			<div class="col-md-4">
				
       
        
        
			</div>
			<div class="col-xs-1">
				<div class="form-group">
           			Pajak
          		</div>
			</div>
			<div class="col-xs-1">
		           	<div class="form-group">
				        <input class="form-control" autocomplete="off" type="text" name="keterangan_pembelian">
				    </div>
        	</div>
			<div class="col-xs-2">
		           	<div class="form-group">
				        <input class="form-control" autocomplete="off" type="text" name="keterangan_pembelian">
				    </div>
        	</div>
        	<div class="col-xs-1">
				<div class="form-group">
           			Kekurangan
          		</div>
			</div>
			<div class="col-xs-1">
		           	<div class="form-group">
				        <input class="form-control" autocomplete="off" type="text" name="keterangan_pembelian">
				    </div>
        	</div>
			<div class="col-xs-2">
		           	<div class="form-group">
				        <input class="form-control" autocomplete="off" type="text" name="keterangan_pembelian">
				    </div>
        	</div>
		</div>
	</form>
<script>
	var zonk=''; 
	var save_method;
	var link = "<?php echo site_url('Item_Baru')?>";
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
            "url": "<?php echo site_url('Item_Baru/ajax_list')?>",
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