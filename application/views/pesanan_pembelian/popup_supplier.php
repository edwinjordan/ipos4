<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
<title>Admin Elecomp</title>
<meta name="description" content="Marino, Admin theme, Dashboard theme, AngularJS Theme">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.css" />

<script src="<?= base_url(); ?>assets/js/jquery.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
</head>
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
      <!-- <?php
      if($data==true){
      $no=1;
      foreach ($data as $tampil){
      $this->table->add_row($tampil->kode_supplier,$tampil->supplier_nama,'<button type="button" class="label label-info" onclick="ambilData('.$tampil->kode_supplier.')">Ambil Data</button>');
      $no++;
      }
      $tabel=$this->table->generate();
      echo $tabel;
      }else {
        echo "<div class='alert alert-danger'>Data Tidak Ditemukan</div>";
      }
      ?> -->
</div>
</body>
<script type="text/javascript">
function ambilData(kode_supplier){
opener.document.form1.kode_supplier.value = kode_supplier;
window.opener.focus();
window.close();
}

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
<script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
<script src="<?php echo base_url();?>assets/js/dataTables/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>assets/js/dataTables/jquery.dataTables.bootstrap.js"></script>
<script src="<?php echo base_url();?>assets/js/dataTables/extensions/TableTools/js/dataTables.tableTools.js"></script>
<script src="<?php echo base_url();?>assets/js/dataTables/extensions/ColVis/js/dataTables.colVis.js"></script>
</html>
