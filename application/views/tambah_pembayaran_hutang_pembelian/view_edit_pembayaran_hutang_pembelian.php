<?php $title = "<i class='fa fa-file-image-o'></i>&nbsp;Update Pembayaran Hutang"; ?>
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
					<h4 class="widget-title">Form Update Daftar Pembayaran Pembelian</h4>
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
							<form id="formHutang" name="formHutang" class="form-group" role="form">
								<div class="col-xs-12">
									<div class="col-xs-2">
										<div class="form-group">
											No Transaksi
										</div>
									</div>
									<div class="col-xs-2">
										<div class="form-group">
											<input disabled="disabled" class="form-control" name="kode_hutang" id="kode_hutang" value="<?php echo $getUpdate->kode_hutang_bayar ?>" >
										</div>
									</div>
									<div class="col-xs-2">
										<div class="form-group">
											Cara Bayar
										</div>
									</div>
									<div class="col-xs-2">
										<div class="form-group">
											<input class="form-control" disabled="disabled" type="text" name="cara_bayar" id="cara_bayar" value="Tunai">
										</div>
									</div>
									<div class="col-xs-2">
										<div class="form-group">
											Jam :
										</div>
									</div>
									<div class="col-xs-2">
										<div class="form-group">
											<input class="form-control" disabled="disabled" id="clock">
										</div>
									</div>
								</div>

								<div class="col-xs-12">
									<div class="col-xs-2">
										<div class="form-group">
											Tanggal
										</div>
									</div>
									<div class="col-xs-2">
										<div class="form-group">
											<input class="form-control" type="datetime" name="tgl" id="tgl" value="<?php echo $getUpdate->hutang_bayar_tgl ?>" >
										</div>
									</div>
									<div class="col-xs-2">
										<div class="form-group">
											Supplier
										</div>
									</div>
									<div class="col-xs-2">
										<div class="form-group">
											<select name="supplier" id="supplier" class="form-control" data-live-search="true" data-width="100%" required="">
												<?php foreach ($supplier as $key): ?>
												<?php if($key->kode_supplier==$getUpdate->kode_supplier){
													echo "<option value='".$key->kode_supplier."'selected>".$key->supplier_nama."</option>";
												} else{
													echo "<option value='".$key->kode_supplier."'>".$key->supplier_nama."</option>";
												}
												endforeach ?>
											</select>
										</div>
									</div>
									<div class="col-xs-2">
										<div class="form-group">
											Dept. :
										</div>
									</div>
									<div class="col-xs-2">
										<div class="form-group">
											<input disabled="disabled" class="form-control" name="no_transaksi" id="no_transaksi" value="Depart.">
										</div>
									</div>
								</div>

								<div class="col-xs-12">
									<div class="col-xs-2">
										<div class="form-group">
											Total Pembayaran 
										</div>
									</div>
									<div class="col-xs-2">
										<div class="form-group">
											<input class="form-control" type="text" name="total_bayar" id="total_bayar" value="<?php echo $getUpdate->hutang_bayar_total_bayar ?>" >
										</div>
									</div>
									<div class="col-xs-2">
										<div class="form-group">
											Keterangan
										</div>
									</div>
									<div class="col-xs-2">
										<div class="form-group">
											<textarea class="form-control" name="ket_hutang" id="ket_hutang"><?php echo $getUpdate->hutang_bayar_ket ?></textarea>
										</div>
									</div>
									<div class="col-xs-2">
										<div class="form-group">
											User :
										</div>
									</div>
									<div class="col-xs-2">
										<div class="form-group">
											<input disabled="disabled" class="form-control" name="no_transaksi" id="no_transaksi" value="Admin">
										</div>
									</div>
								</div>

								<div class="col-xs-12">
									<div class="col-xs-10"></div>
									<!-- <div class="col-xs-8"></div>
									<div class="col-xs-1">
										<div class="form-group">
											Lunas
										</div>
									</div>
									<div class="col-xs-1">
										<div class="form-group">
											<button class="btn btn-default btn-sm"><i class="fa fa-check-square" aria-hidden="true"></i>
											</button>
										</div>
									</div> -->
									<div class="col-xs-2">
										<div class="form-group">
											<button type="button" id="btnSave" onclick="save()" class="btn btn-primary">UPDATE</button>
											<!-- <a type="button" onclick="save()" id="btnSave" class="btn btn-primary">Simpan</a> -->
										</div>
									</div>
								</div>
							</form>

							<br />
						</div><!-- /.span -->
					</div>					
				</div><!-- /.row -->
			</div>
		</div>
	</div>

	<script>
	var link = "<?php echo site_url('Daftar_Pembayaran_Pembelian')?>";
	var table;

//jam
function clock() {
	var time = new Date(),
	hours = time.getHours(),
	minutes = time.getMinutes(),
	seconds = time.getSeconds(),
	clock = document.querySelectorAll('#clock')[0].innerHTML = harold(hours) + ":" + harold(minutes) + ":" + harold(seconds);
	document.getElementById("clock").value = clock;

	function harold(standIn) {
		if (standIn < 10) {
			standIn = '0' + standIn
		}
		return standIn;
	}
}
setInterval(clock, 1000);

$(document).ready(function(){
	$('#idImgLoader').fadeOut(2000);
	setTimeout(function(){
		data();
	}, 2000);
});

function reload_table() {
	location.href = link;    
}
function filter(){
	var supplier = document.getElementById('supplier').value;
	this.link = "<?php echo site_url('Tambah_Pembayaran_Hutang/ajax_list_filter/') ?>/"+supplier;
	console.log(link)
	this.table.ajax.url(link).load();
}

function data(){
	$('#data').fadeIn();
}

function save() {
	$('#btnSave').text('Updating...');
	$('#btnSave').attr('disabled', true);
	var url;
	url = "<?php echo site_url('Daftar_Pembayaran_Pembelian');?>/update_hutang/"; 
	tinyMCE.triggerSave();
	$.ajax({
		url: url,
		type: "POST",
		data: {
			hutang_bayar_tgl: $('#tgl').val(),
			ket:$('#ket_hutang').val(),
			hutang_bayar_total_bayar: $('#total_bayar').val(),
			supplier: $('#supplier').val(),
			kode_hutang: $('#kode_hutang').val()
		},
		dataType: "text",
		success: function(result) {

			if (result.status) {
				setTimeout(function(){
					Batal();
				}, 1000);

				setTimeout(function(){
					reload_table();
				}, 1000);
			}

			setTimeout(function(){
				$('#btnSave').text('Update');

				$('#btnSave').attr('disabled', false);
				document.getElementById('form').reset();

			}, 1000);
			swal_berhasil(); 
			setTimeout(function(){
				reload_table();
			}, 1000);

		}, error: function(jqXHR, textStatus, errorThrown) {

			alert('Error adding/update data');

			swal({ title:"ERROR", text:"Error adding / update ", type: "warning", closeOnConfirm: true}); 

			$('#btnSave').text('Update save()'); $('#btnSave').attr('disabled',false);  
		}
	});
}


</script>	