<section class="content">
<div class="page-header">
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
<form action="" name="form1" id="form1" method="post" enctype="multipart/form-data">
           	<div class="col-xs-12">
           		<div class="col-xs-2">
           			<div class="form-group">
           				No Transaksi
           			</div>
           		</div>
           		<div class="col-xs-2">
           			<div class="form-group">
	           			<!-- <a data-toggle="modal" href="#modal-1"> -->
			           		<input type="text" class="form-control" name="kd_transaksi" id="kd_transaksi">
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
		           		<select name="jenis_faktur" id="jenis_faktur" class="form-control" data-live-search="true" data-width="100%"  onchange="javascript:selectfaktur()" disabled>
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
		           		<select name="jenis_faktur" id="jenis_faktur" class="form-control" data-live-search="true" data-width="100%"  onchange="javascript:selectfaktur()" disabled>
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
		           		<input class="form-control date-picker" type="text" id="tgl_nota_supplier_pembelian" name="tgl_nota_supplier_pembelian" value="<?php echo date('Y-m-d');?>" data-date-format="dd-mm-yyyy">
		           	</div>
           		</div>
           		<div class="col-xs-2">
           			<div class="form-group">
           				Kode Supplier
           			</div>
           		</div>
           		<div class="col-xs-2">
           			<div class="form-group">
		           		<input type="text" class="form-control" name="kode_supplier" id="kode_supplier" disabled>
		           	</div>

           		</div>
           		<div class="col-xs-1">
           			<div class="form-group">
		           		<button id="cari" type="button" class="btn btn-default btn-sm"><i class="fa fa-search" aria-hidden="true"></i></button>

		           	</div>

           		</div>


		    </div>

    </form>


<button id="stok" type="button" class="btn btn-default"><i class="fa fa-cog"></i> Cek Stok Minimum</button><br />
<!--<div class="box-header">
	<button class="btn btn-default" onclick="reload_table()"><i class="fa fa-refresh"></i> Reload</button>
	<button class="btn btn-danger" onclick="Tambah()"><i class="fa fa-plus"></i> Tambah Data</button>
</div>--><br />
<table id="dynamic-table2" class="table table-striped table-bordered table-hover">
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

	$(function() {
		 $('#cari').click(function(){
		 	sUrl="<?=base_url()?>Pesanan_Pembelian/popup"; features = 'width=500px,height=500px,toolbar=no, left=450,top=100, ' +
			  'directories=no, status=no, menubar=no, ' +
			  'scrollbars=no, resizable=no';
			  window.open(sUrl,"winChild",features);
		 });
	});

	$(function() {
		 $('#stok').click(function(){
		 	sUrl="<?=base_url()?>Pesanan_Pembelian/popup_stok_min"; features = 'width=700px,height=600px,toolbar=no, left=450,top=100, ' +
			  'directories=no, status=no, menubar=no, ' +
			  'scrollbars=no, resizable=no';
			  window.open(sUrl,"winChild",features);
		 });
	});

	$(function() {
	    $('#kode_supplier').keyup(function(){
	        var pm1=$('#kode_supplier').val();
	        $.ajax({
	                type: "POST",
	                url : "<?php echo base_url(); ?>Pesanan_Pembelian/ajax",
	                data : "kode_supplier="+pm1+"",
	                datatype : 'json',
	                success: function(msg){
				          $('#show').attr('hidden',false);
	                $('#show').html(msg);
	                //     if (msg != "Data Tidak Valid") {
					        // $('#simpan').attr('disabled',false);
	                //     } else {
					        // $('#simpan').attr('disabled',true);
	                //     }
	                }
	            });
	    });
	  });

	$(document).ready(function(){
		$.get("<?php echo site_url('Pesanan_Pembelian/getNomor')?>", $(this).serialize())
		.done(function(data) {
			$('#kd_transaksi').val(data);
		});
	});


	$(document).ready(function() {
		table = $('#dynamic-table2').DataTable({

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
				"bDestroy": true,
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('Item_Baru/ajax_list_id')?>",
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
