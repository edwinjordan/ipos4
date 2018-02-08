<?php
$id = $_POST['kode_item'];
?>

<section class="content">
<div class="page-header">
	<h1>
    Stok Minimum
	</h1>
</div><!-- /.page-header -->

<div id="panel-data">

<table id="dynamic-table" class="table table-striped table-bordered table-hover">
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
</table>
</div>

</section>
<script type="text/javascript">
	var zonk =''
	var save_method;
	var table;
	var link = "<?php echo site_url('Item')?>";
	var kdItem = "<?php echo @$id;?>";

  $(document).ready(function() {
		table = $('#dynamic-table').DataTable({

        "paging":   false,
        "ordering": false,
        "info":     false,
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
				"bDestroy": true,
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": link+"/ajax_listid/"+kdItem,
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
</script>