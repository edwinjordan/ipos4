<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Admin Elecomp</title>
<meta name="description" content="Marino, Admin theme, Dashboard theme, AngularJS Theme">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />

<script src="<?= base_url(); ?>assets/js/jquery.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
</head>
<body data-layout="empty-layout" data-palette="palette-0">
<div style="height:700px; width:100%; overflow-y:scroll ; overflow-x: hidden; padding-bottom:10px;">
<section class="content">
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
               				Item
               			</div>
               		</div>
               		<div class="col-xs-3">
               			<div class="form-group">
    	           			<!-- <a data-toggle="modal" href="#modal-1"> -->
    			           		<input type="hidden" class="form-control" name="kode_item" id="kode_item" >
                        <input type="text" class="form-control" name="item_nama" id="item_nama">
    			           	<!-- </a> -->
    		           	</div>
               		</div>
                  <div class="col-xs-1">
               			<div class="form-group">
      		           		<button type="button" onclick="cc()" class="btn btn-default btn-sm"><i class="fa fa-search" aria-hidden="true"></i></button>

    		           	</div>

               		</div>
                  <div class="col-xs-2">
                    <div class="form-group">
                      Jenis
                    </div>
                  </div>
                  <div class="col-xs-3">
                    <div class="form-group">
                      <!-- <a data-toggle="modal" href="#modal-1"> -->
                      <select class="form-control" name="kode_item_jenis" id="kode_item_jenis">
                          <?php
                          $item = $this->db->get('item_jenis');
                          foreach ($item->result() as $jenis): ?>
                              <option value="<?php echo $jenis->kode_item_jenis;?>"><?php echo $jenis->item_jenis_nama;?></option>
                          <?php endforeach; ?>

                      </select>
                    </div>
                  </div>
    		    </div>



            <div class="col-xs-12">
              <div class="col-xs-2">
                <div class="form-group">
                  Gudang/ Dept
                </div>
              </div>
              <div class="col-xs-3">
                <div class="form-group">
                  <!-- <a data-toggle="modal" href="#modal-1"> -->
                  <select class="form-control" name="kode_gudang" id="kode_gudang">
                      <?php
                      $item = $this->db->get('gudang');
                      foreach ($item->result() as $jenis): ?>
                          <option value="<?php echo $jenis->id_gudang;?>"><?php echo $jenis->gudang_ket;?></option>
                      <?php endforeach; ?>

                  </select>
                </div>
              </div>

              <div class="col-xs-2">
                <div class="form-group">
                  Urut Berdasarkan
                </div>
              </div>
              <div class="col-xs-3">
                <div class="form-group">
                  <select class="form-control" name="kode_item">
                      <?php
                      $item = $this->db->get('item');
                      foreach ($item->result() as $jenis): ?>
                          <option value="<?php echo $jenis->kode_item;?>"><?php echo $jenis->item_nama;?></option>
                      <?php endforeach; ?>

                  </select>
                </div>
              </div>

            </div>
            <div class="col-xs-12">
              <!-- <div class="col-xs-2">
                <div class="form-group">
                  Supplier
                </div>
              </div>
              <div class="col-xs-3">
                <div class="form-group">
                    <input type="hidden" class="form-control" name="kode_supplier" id="kode_supplier" >
                    <input type="text" class="form-control" name="supplier_nama" id="supplier_nama">

                </div>
              </div>
              <div class="col-xs-1">
                <div class="form-group">
                  <button type="button" onclick="cd()" class="btn btn-default btn-sm"><i class="fa fa-search" aria-hidden="true"></i></button>

                </div>

              </div> -->
              <div class="col-xs-3">
                <button type="button" id="button" class="btn btn-danger">
                          <i class="ace-icon fa fa-cogs align-top bigger-125"></i>
                          Prosess
                </button>
              </div>

            </div>

        </form><br />
        <ul id="result"></ul>
  </div>
  </div>
  </div>
  </div>
  </div>
</section>
</div>
</body>
<div class="modal fade" id="modal-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog">
  		<div class="modal-content">
    		<div class="modal-header">
     		 	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      			<h4 class="modal-title">Pilih Item</h4>
    		</div>
     		<div class="modal-body" style="overflow:auto;">
          <table id="dynamic-table4" class="table table-striped table-bordered table-hover">
              <thead>
                  <tr>
                      <th>Kode Item</th>
                      <th>Nama Item</th>
                      <th>Aksi</th>
                  </tr>
              </thead>
              <tbody></tbody>
          </table>
			  </div>
      		<div class="modal-footer">
        		<button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
      		</div>
    	</div>
  	</div>
</div>

<div class="modal fade" id="modal-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog">
  		<div class="modal-content">
    		<div class="modal-header">
     		 	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      			<h4 class="modal-title">Pilih Supplier</h4>
    		</div>
     		<div class="modal-body" style="overflow:auto;">
          <table id="dynamic-table5" class="table table-striped table-bordered table-hover">
              <thead>
                  <tr>
                      <th>Kode Supplier</th>
                      <th>Nama Supplier</th>
                      <th>Aksi</th>
                  </tr>
              </thead>
              <tbody></tbody>
          </table>
			  </div>
      		<div class="modal-footer">
        		<button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
      		</div>
    	</div>
  	</div>
</div>
<script type="text/javascript">
$(function() {
   $('#cariitem').click(function(){
    sUrl="<?=base_url()?>Pesanan_Pembelian/popup_item"; features = 'width=500px,height=500px,toolbar=no, left=450,top=100, ' +
      'directories=no, status=no, menubar=no, ' +
      'scrollbars=no, resizable=no';
      window.open(sUrl,"winChild",features, "_blank");
   });
});

$(document).ready(function(){

                 function search(){

                      var kode_item=$("#kode_item").val();
                      var kode_item_jenis=$("#kode_item_jenis").val();
                      var kode_gudang=$("#kode_gudang").val();

                      if(kode_item!="" && kode_item_jenis!="" && kode_gudang!=""){
                        $("#result").html("<img style='display: block; margin: 0 auto; text-align: center; ' src='<?php echo base_url();?>assets/images/ajax-loader.gif'/>");
                         $.ajax({
                            type:"post",
                            url:"<?php echo base_url('Pesanan_Pembelian/create_load'); ?>",
                            data:{kode_item:kode_item, kode_item_jenis:kode_item_jenis, kode_gudang:kode_gudang},
                            success:function(data){
                                $("#result").html(data);
                             }
                          });
                      }



                 }

                  $("#button").click(function(){
                  	 search();
                  });

                  $('#search').keyup(function(e) {
                     if(e.keyCode == 13) {
                        search();
                      }
                  });
});

$(document).ready(function() {
  setTimeout(function(){
    tabel1();
    tabel2();
  }, 2000);
}).fnDestroy();

function tabel1(){
  table = $('#dynamic-table4').DataTable({

      "paging":   false,
      "ordering": false,
      "info":     false,
      "processing": true, //Feature control the processing indicator.
      "serverSide": true, //Feature control DataTables' server-side processing mode.
      "bDestroy": true,
      "order": [], //Initial no order.

      // Load data for the table's content from an Ajax source
      "ajax": {
          "url": "<?php echo site_url('Pesanan_Pembelian/ajax_list_item')?>",
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
  table = $('#dynamic-table5').DataTable({

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
}

function cc() {
	$("#modal-1").modal('show');
}

function cd() {
	$("#modal-2").modal('show');
}

function pilihDataitem(id, nama){
    document.getElementById('item_nama').value = nama;
		document.getElementById('kode_item').value = id;
		$('#modal-1').modal('hide');
}

function pilihDatasupplier(id2, nama2){
    document.getElementById('supplier_nama').value = nama2;
		document.getElementById('kode_supplier').value = id2;
		$('#modal-2').modal('hide');
}


</script>
<script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
<script src="<?php echo base_url();?>assets/js/dataTables/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>assets/js/dataTables/jquery.dataTables.bootstrap.js"></script>
<script src="<?php echo base_url();?>assets/js/dataTables/extensions/TableTools/js/dataTables.tableTools.js"></script>
<script src="<?php echo base_url();?>assets/js/dataTables/extensions/ColVis/js/dataTables.colVis.js"></script>
</html>
