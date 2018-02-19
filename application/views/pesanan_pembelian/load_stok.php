<?php
$id = $_POST['kode_item'];
$id2 = $_POST['kode_item_jenis'];
$id3 = $_POST['kode_gudang'];
$id4 = $_POST['urut'];
?>

<section class="content">
<div class="page-header">
	<h1 >
    Stok Minimum
	</h1>
</div><!-- /.page-header -->

<div id="panel-data">
<form method="post" id="formAksi">
	<input type="checkbox" name="cb_data2[]" id="kode" checked="checked" style="display:none">
<table id="dynamic-table8" class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>No.</th>
            <th></th>
            <th>Kode Item</th>
            <th>Nama Item</th>
						<th>Jenis</th>
            <th>Stok</th>
            <th>Stok Minimum</th>
        </tr>
    </thead>
    <tbody></tbody>
</table><br />
<div class="col-xs-3">
  <button type="submit" class="btn btn-primary">
            <i class="ace-icon fa fa-plus align-top bigger-125"></i>
            Pilih
  </button>
</div>
</form>
</div>

</section>
<script type="text/javascript">
	var zonk =''
	var save_method;
	var table;
	var link = "<?php echo site_url('Item')?>";
	var kdItem = "<?php echo @$id;?>";
  var kdJenis = "<?php echo @$id2;?>";
  var kdGudang = "<?php echo @$id3;?>";
	var urut = "<?php echo @$id4;?>";

	$(document).ready(function(){
	  $.get("<?php echo site_url('Pesanan_Pembelian/getNomor')?>", $(this).serialize())
	  .done(function(data) {
			///console.log("k"+data);
			// document.getElementById('kode').value = data;
	    $('#kode').val(data);
	  });
	});

  $(document).ready(function() {
		table = $('#dynamic-table8').DataTable({

        "paging":   false,
        "ordering": false,
        "info":     false,
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
				"bDestroy": true,
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": link+"/ajax_listid/"+kdItem+"/"+kdJenis+"/"+kdGudang+"/"+urut,
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
  });

	function reload_table() {
    	table.ajax.reload(null, false);
	}

	var $a = $('#dynamic-table2');

	$(document).on('submit', '#formAksi', function(e) {
      e.preventDefault();
      if (confirm('Apakah Anda Yakin Memilih Data Ini???')) {
            $.ajax({
                url : "<?php echo site_url('Item/item_act')?>/",
                type: "POST",
                data:  new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                success: function(data){
								$('#modal-10').modal('hide');
                $('#dynamic-table2').DataTable().ajax.reload();


                }
            });
        }
        return false;
  });
</script>
