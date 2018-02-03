<?php $title = "<i class='fa fa-file-text-o'></i>&nbsp;Daftar Supplier"; ?>
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
                        Kata Kunci
                    </div>
                </div>
                <div class="col-xs-9">
                    <div class="form-group">
                        <!-- <a data-toggle="modal" href="#modal-1"> -->
                        <input class="form-control" name="kode_supplier" id="kode_supplier" value="2" type="hidden">
                        <input class="form-control" name="supplier" id="nama_supplier" onfocus="cc()" type="text">
                        <!-- </a> -->
                    </div>
                </div>
                <div class="col-xs-1">
                    <div class="form-group">
                        <button class="btn btn-xs" onclick="search_table()"><i class="fa fa-search"></i></button>
                        <button class="btn btn-xs" onclick="refresh_table()"><i class="fa fa-refresh"></i></button>
                    </div>
                </div>
            </div>
    </div>
    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>Kode</th>
            <th>Mata Uang</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Kota</th>
            <th>Provinsi</th>
            <th>Negara</th>
            <th>Kode Pos</th>
            <th>Telepon</th>
            <th>Fax</th>
            <th>Kontak</th>
            <th>Email</th>
            <th>No Rek</th>
            <th>Pemilik Rek</th>
            <th>Bank</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody></tbody>
</table>
  <button class="btn btn-danger" onclick="Tambah()" ><i class="fa fa-plus"></i> Tambah Data</button>
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