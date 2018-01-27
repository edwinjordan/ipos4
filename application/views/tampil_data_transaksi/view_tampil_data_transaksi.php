<?php $title = "<i class='fa fa-file-image-o'></i>&nbsp;Tampil Data Transaksi"; ?>
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
</div>
</div>

<div class="tabbable">
	<ul class="nav nav-tabs" id="formAksi">
		<li class="active">
			<a data-toggle="tab" href="#home">
				Rincian
			</a>
		</li>

		<li>
			<a data-toggle="tab" href="#messages">
				Potongan
			</a>
		</li>

											
	</ul>

	<div class="tab-content">
	<div id="home" class="tab-pane fade in active">
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
	</div>

	<div id="messages" class="tab-pane fade">
		<table id="dynamic-tabel" class="table table-striped table-bordered table-hover">
		    <thead>
		        <tr>
		            <th>No</th>
		            <th>Kode Item</th>
					<th>Keterangan</th>
		            <th>Pot(%)</th>
		            <th>Pot 2</th>
					<th>Pot 3</th>
		            <th>Pot 4</th>
		        </tr>
		    </thead>
		    <tbody></tbody>
		</table>
	</div>

	</div>
</div>
<script>
	var zonk=''; 
	var save_method;
	var link = "<?php echo site_url('Tampil_Data_Transaksi')?>";
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
	  setTimeout(function(){
            tabel1();
            tabel2();
      }, 2000);
	
	}).fnDestroy();

	function tabel1 (){
		table = $('#dynamic-table').DataTable({ 

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
		"bDestroy": true,
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('Tampil_Data_Transaksi/ajax_list')?>",
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
	}

	function tabel2(){
		table = $('#dynamic-tabel').DataTable({ 

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
		"bDestroy": true,
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('Tampil_Data_Transaksi/ajax_list1')?>",
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
	}

	
</script>	