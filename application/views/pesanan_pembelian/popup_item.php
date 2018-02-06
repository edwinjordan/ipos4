<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Admin Elecomp</title>
<meta name="description" content="Marino, Admin theme, Dashboard theme, AngularJS Theme">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-fonts.css" />

<!-- ace styles -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />
<link href="<?= base_url(); ?>assets/plugins/sweetalert/sweetalert.css" rel="stylesheet">
<link href="<?= base_url(); ?>assets/plugins/select2/select2.min.css" rel="stylesheet">

<script src="<?= base_url(); ?>assets/js/jquery.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
</head>
<body data-layout="empty-layout" data-palette="palette-0">
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
               				Dari Item
               			</div>
               		</div>
               		<div class="col-xs-3">
               			<div class="form-group">
    	           			<!-- <a data-toggle="modal" href="#modal-1"> -->
    			           		<input type="text" class="form-control" name="kode_item" id="kd_transaksi">
    			           	<!-- </a> -->
    		           	</div>
               		</div>
                  <div class="col-xs-1">
               			<div class="form-group">
    		           		<button id="cariitem" type="button" class="btn btn-default btn-sm"><i class="fa fa-search" aria-hidden="true"></i></button>

    		           	</div>

               		</div>
               		<div class="col-xs-1">
               			<div class="form-group">
               				s/d
               			</div>
               		</div>
               		<div class="col-xs-3">
               			<div class="form-group">
    		           			<input type="text" class="form-control" name="kode_item" id="kode_item">
    		           	</div>
               		</div>
                  <div class="col-xs-1">
               			<div class="form-group">
    		           		<button id="cari" type="button" class="btn btn-default btn-sm"><i class="fa fa-search" aria-hidden="true"></i></button>

    		           	</div>

               		</div>


    		    </div>

            <div class="col-xs-12">
              <div class="col-xs-2">
                <div class="form-group">
                  Jenis
                </div>
              </div>
              <div class="col-xs-3">
                <div class="form-group">
                  <!-- <a data-toggle="modal" href="#modal-1"> -->
                  <select class="form-control" name="kode_item_jenis">
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
                  Supplier
                </div>
              </div>
              <div class="col-xs-3">
                <div class="form-group">
                  <!-- <a data-toggle="modal" href="#modal-1"> -->
                    <input type="text" class="form-control" name="kode_supplier" id="kode_supplier">
                  <!-- </a> -->
                </div>
              </div>
              <div class="col-xs-1">
                <div class="form-group">
                  <button id="cari" type="button" class="btn btn-default btn-sm"><i class="fa fa-search" aria-hidden="true"></i></button>

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
              <div class="col-xs-2">
                <div class="form-group">
                  Gudang/ Dept
                </div>
              </div>
              <div class="col-xs-3">
                <div class="form-group">
                  <!-- <a data-toggle="modal" href="#modal-1"> -->
                  <select class="form-control" name="kode_item_jenis">
                      <?php
                      $item = $this->db->get('gudang');
                      foreach ($item->result() as $jenis): ?>
                          <option value="<?php echo $jenis->id_gudang;?>"><?php echo $jenis->gudang_ket;?></option>
                      <?php endforeach; ?>

                  </select>
                </div>
              </div>
            </div>

        </form>
  </div>
  </div>
  </div>
  </div>
  </div>
</section>
</body>
<script type="text/javascript">
$(function() {
   $('#cariitem').click(function(){
    sUrl="<?=base_url()?>Pesanan_Pembelian/popup_item"; features = 'width=500px,height=500px,toolbar=no, left=450,top=100, ' +
      'directories=no, status=no, menubar=no, ' +
      'scrollbars=no, resizable=no';
      window.open(sUrl,"winChild",features);
   });
});
</script>
<script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
<script src="<?php echo base_url();?>assets/js/dataTables/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>assets/js/dataTables/jquery.dataTables.bootstrap.js"></script>
<script src="<?php echo base_url();?>assets/js/dataTables/extensions/TableTools/js/dataTables.tableTools.js"></script>
<script src="<?php echo base_url();?>assets/js/dataTables/extensions/ColVis/js/dataTables.colVis.js"></script>
</html>
