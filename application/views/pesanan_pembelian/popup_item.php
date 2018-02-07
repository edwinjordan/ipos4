<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Admin Elecomp</title>
<meta name="description" content="Marino, Admin theme, Dashboard theme, AngularJS Theme">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.css" />


<!-- page specific plugin styles -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-timepicker.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/daterangepicker.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-datetimepicker.css" />
<link href="<?php echo base_url('assets')?>/css/bootstrap-table.css" rel="stylesheet">
<!-- text fonts -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-fonts.css" />

<!-- ace styles -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />
<link href="<?= base_url(); ?>assets/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/plugins/select2/select2.min.css" rel="stylesheet">
<!--[if lte IE 9]>
  <link rel="stylesheet" href="../assets/css/ace-part2.css" class="ace-main-stylesheet" />
<![endif]-->

<!--[if lte IE 9]>
  <link rel="stylesheet" href="../assets/css/ace-ie.css" />
<![endif]-->

<!-- inline styles related to this page -->

<!-- ace settings handler -->
<script src="<?php echo base_url('assets')?>/js/bootstrap-table.js"></script>
<script src="<?php echo base_url();?>assets/js/ace-extra.js"></script>
<script src="<?= base_url(); ?>assets/jquery/jquery-2.1.4.min.js"></script>
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
<script type="text/javascript">
  if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url();?>assets/js/jquery.mobile.custom.js'>"+"<"+"/script>");
</script>
<script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>

<!-- page specific plugin scripts -->

<!-- ace scripts -->
<script src="<?php echo base_url();?>assets/js/ace/elements.scroller.js"></script>
<script src="<?php echo base_url();?>assets/js/ace/elements.colorpicker.js"></script>
<script src="<?php echo base_url();?>assets/js/ace/elements.fileinput.js"></script>
<script src="<?php echo base_url();?>assets/js/ace/elements.typeahead.js"></script>
<script src="<?php echo base_url();?>assets/js/ace/elements.wysiwyg.js"></script>
<script src="<?php echo base_url();?>assets/js/ace/elements.spinner.js"></script>
<script src="<?php echo base_url();?>assets/js/ace/elements.treeview.js"></script>
<script src="<?php echo base_url();?>assets/js/ace/elements.wizard.js"></script>
<script src="<?php echo base_url();?>assets/js/ace/elements.aside.js"></script>
<script src="<?php echo base_url();?>assets/js/ace/ace.js"></script>
<script src="<?php echo base_url();?>assets/js/ace/ace.ajax-content.js"></script>
<script src="<?php echo base_url();?>assets/js/ace/ace.touch-drag.js"></script>
<script src="<?php echo base_url();?>assets/js/ace/ace.sidebar.js"></script>
<script src="<?php echo base_url();?>assets/js/ace/ace.sidebar-scroll-1.js"></script>
<script src="<?php echo base_url();?>assets/js/ace/ace.submenu-hover.js"></script>
<script src="<?php echo base_url();?>assets/js/ace/ace.widget-box.js"></script>
<script src="<?php echo base_url();?>assets/js/ace/ace.settings.js"></script>
<script src="<?php echo base_url();?>assets/js/ace/ace.settings-rtl.js"></script>
<script src="<?php echo base_url();?>assets/js/ace/ace.settings-skin.js"></script>
<script src="<?php echo base_url();?>assets/js/ace/ace.widget-on-reload.js"></script>
<script src="<?php echo base_url();?>assets/js/ace/ace.searchbox-autocomplete.js"></script>
<script src="<?php echo base_url();?>assets/js/dataTables/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>assets/js/dataTables/jquery.dataTables.bootstrap.js"></script>
<script src="<?php echo base_url();?>assets/js/dataTables/extensions/TableTools/js/dataTables.tableTools.js"></script>
<script src="<?php echo base_url();?>assets/js/dataTables/extensions/ColVis/js/dataTables.colVis.js"></script>
<script src="<?php echo base_url();?>assets/js/date-time/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url();?>assets/js/date-time/bootstrap-timepicker.js"></script>
<script src="<?php echo base_url();?>assets/js/date-time/moment.js"></script>
<script src="<?php echo base_url();?>assets/js/date-time/daterangepicker.js"></script>
<script src="<?php echo base_url();?>assets/js/date-time/bootstrap-datetimepicker.js"></script>


<!-- inline scripts related to this page -->
<script type="text/javascript">
  jQuery(function($) {
   var $sidebar = $('.sidebar').eq(0);
   if( !$sidebar.hasClass('h-sidebar') ) return;

   $(document).on('settings.ace.top_menu' , function(ev, event_name, fixed) {
    if( event_name !== 'sidebar_fixed' ) return;

    var sidebar = $sidebar.get(0);
    var $window = $(window);

    //return if sidebar is not fixed or in mobile view mode
    var sidebar_vars = $sidebar.ace_sidebar('vars');
    if( !fixed || ( sidebar_vars['mobile_view'] || sidebar_vars['collapsible'] ) ) {
      $sidebar.removeClass('lower-highlight');
      //restore original, default marginTop
      sidebar.style.marginTop = '';

      $window.off('scroll.ace.top_menu')
      return;
    }


     var done = false;
     $window.on('scroll.ace.top_menu', function(e) {

      var scroll = $window.scrollTop();
      scroll = parseInt(scroll / 4);//move the menu up 1px for every 4px of document scrolling
      if (scroll > 17) scroll = 17;


      if (scroll > 16) {
        if(!done) {
          $sidebar.addClass('lower-highlight');
          done = true;
        }
      }
      else {
        if(done) {
          $sidebar.removeClass('lower-highlight');
          done = false;
        }
      }

      sidebar.style['marginTop'] = (17-scroll)+'px';
     }).triggerHandler('scroll.ace.top_menu');

   }).triggerHandler('settings.ace.top_menu', ['sidebar_fixed' , $sidebar.hasClass('sidebar-fixed')]);

   $(window).on('resize.ace.top_menu', function() {
    $(document).triggerHandler('settings.ace.top_menu', ['sidebar_fixed' , $sidebar.hasClass('sidebar-fixed')]);
   });


  });
</script>

<!-- the following scripts are used in demo only for onpage help and you don't need them -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace.onpage-help.css" />
<link rel="stylesheet" href="<?php echo base_url();?>docs/assets/js/themes/sunburst.css" />

<script type="text/javascript"> ace.vars['base'] = '..'; </script>
<script src="<?php echo base_url();?>assets/js/ace/elements.onpage-help.js"></script>
<script src="<?php echo base_url();?>assets/js/ace/ace.onpage-help.js"></script>
<script src="<?= base_url(); ?>assets/plugins/sweetalert/sweetalert.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/select2/select2.min.js"></script>
<script src="<?= base_url(); ?>assets/js/app.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets')?>/tiny_mce/tiny_mce_src.js"></script>
</html>
