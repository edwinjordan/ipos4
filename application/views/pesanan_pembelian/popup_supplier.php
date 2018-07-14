<body data-layout="empty-layout" data-palette="palette-0">
<div class="col-md-12">
    <h3>Ambil Data</h3>
    <hr>
    <div id="panel-data">
    <div class="widget-box">

    <div class="widget-body">
    <div class="widget-main">
    <div class="row">
    <div class="col-xs-12">
    <div class="box-header">

    <table id="dynamic-table3" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Kode Supplier</th>
                <th>Nama Supplier</th>
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
  </div>

</div>
</body>
<script type="text/javascript">
var table;

$(document).ready(function() {
  table = $('#dynamic-table3').DataTable({

      "paging":   false,
      "ordering": false,
      "info":     false,
      "processing": true, //Feature control the processing indicator.
      "serverSide": true, //Feature control DataTables' server-side processing mode.
      "bDestroy": true,
      "order": [], //Initial no order.

      // Load data for the table's content from an Ajax source
      "ajax": {
          "url": "<?php echo site_url('Pesanan_Pembelian/ajax_list_tb')?>",
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
