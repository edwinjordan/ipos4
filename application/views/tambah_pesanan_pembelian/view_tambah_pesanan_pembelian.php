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
		           		<input class="form-control" type="date" id="tgl_nota_supplier_pembelian" name="tgl_nota_supplier_pembelian">
		           	</div>
           		</div>
           		<div class="col-xs-2">
           			<div class="form-group">
           				Nama Supplier
           			</div>
           		</div>
           		<div class="col-xs-2">
           			<div class="form-group">
		           		<input type="hidden" class="form-control" name="kode_supplier" id="kode_supplier" disabled>
									<input type="text" class="form-control" name="supplier_nama" id="supplier_nama" disabled>
		           	</div>

           		</div>
           		<div class="col-xs-1">
           			<div class="form-group">
		           		<button onclick="ca()" type="button" class="btn btn-default btn-sm"><i class="fa fa-search" aria-hidden="true"></i></button>

		           	</div>

           		</div>


		    </div>

    </form>


<button onclick="stok()" type="button" class="btn btn-default"><i class="fa fa-cog"></i> Cek Stok Minimum</button><br />
<!--<div class="box-header">
	<button class="btn btn-default" onclick="reload_table()"><i class="fa fa-refresh"></i> Reload</button>
	<button class="btn btn-danger" onclick="Tambah()"><i class="fa fa-plus"></i> Tambah Data</button>
</div>--><br />
<table id="dynamic-table2" class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
        				<th></th>
			        	<th>No.</th>
			            <th>Kode Item</th>
						<th>Keterangan</th>
						<th>Jumlah Pesanan</th>
						<th>Jumlah Sudah Terima</th>
						<th>Satuan</th>
						<th>Harga</th>
						<th>Potongan</th>
						<th>Total</th>
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
		        <input class="form-control" type="date" name="tgl_nota_supplier_pembelian" id="reservation">
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

<div class="modal fade" id="modal-3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  	<div class="modal-dialog">
	  		<div class="modal-content">
	    		<div class="modal-header">
	     		 	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	      			<h4 class="modal-title">Pilih Supplier</h4>
	    		</div>
	     		<div class="modal-body" style="overflow:auto;">
						<?php	$this->load->view('pesanan_pembelian/popup_supplier');?>
					</div>
	      		<div class="modal-footer">
	        		<button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
	      		</div>
	    	</div>
	  	</div>
</div>

<div class="modal" id="modal-10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  	<div class="modal-dialog modal-lg">
	  		<div class="modal-content">
	    		<div class="modal-header">
	     		 	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	      			<h4 class="modal-title">Cek Stok Minimum</h4>
	    		</div>
	     		<div class="modal-body" style="overflow:auto;">
							<?php	$this->load->view('pesanan_pembelian/popup_stok_min');?>
					</div>
	      		<div class="modal-footer">
	        		<button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
	      		</div>
	    	</div>
	  	</div>
</div>

<script>
	var zonk='';
	var save_method;
	var link = "<?php echo site_url('Pesanan_Pembelian')?>";
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

	function ca() {
		$("#modal-3").modal('show');
	}

	function stok() {
		$("#modal-10").modal('show');
	}

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
		 getNomor();
	});

	function getNomor(){
		$.get("<?php echo site_url('Pesanan_Pembelian/getNomor')?>", $(this).serialize())
		.done(function(data) {
			$('#kd_transaksi').val(data);
		});
	}

  setInterval('getNomor()', 2000);

	$(document).ready(function() {
		table = $('#dynamic-table2').DataTable({

			 "paging":   false,
			 "ordering": false,
			 "info":     false,
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
				"bDestroy": true,
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('Pesanan_Pembelian/ajax_list_id')?>",
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

	function pilihDatasupplier(id2, nama2){
	    document.getElementById('supplier_nama').value = nama2;
			document.getElementById('kode_supplier').value = id2;
			$('#modal-3').modal('hide');
	}

	function reload_table() {
    	table.ajax.reload(null, false);
	}

</script>
