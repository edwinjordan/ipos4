<?php $title = "<i class='fa fa-file-text-o'></i>&nbsp;Daftar Pembelian"; ?>
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
                        <button class="btn btn-default" onclick="search_table()"><i class="fa fa-search"></i></button>
                        <button class="btn btn-default" onclick="refresh_table()"><i class="fa fa-refresh"></i></button>
                    </div>
                </div>
            </div>
        <div class="col-xs-12">
              <div class="col-xs-2">
                <div class="form-group">
                  Dept. / Gudang
                </div>
              </div>
              <div class="col-xs-2">
                <div class="form-group">
                  <select name="jenis_faktur" id="jenis_faktur" class="form-control" data-live-search="true" data-width="100%" required="" onchange="javascript:selectfaktur()">
                      <?php foreach ($gudang as $g){?>
                      <option value="<?php echo $g['id_gudang']?>"><?php echo $g['gudang_ket']?></option>
                      <?php } ?>
                      </select>
                </div>
              </div>
              <div class="col-xs-2">
                <div class="form-group">
                  Tampilan Data Selama
                </div>
              </div>
              <div class="col-xs-1">
                <div class="form-group">
                  <select class="form-control" data-live-search="true" data-width="100%" required="" name="id_top">
                                                        <option value="3">3</option>
                                                        <option value="4">7</option>
                                                        <option value="5">14</option>
                                                        <option value="6">30</option>
                                                        <option value="7">60</option>
                                      </select>
                </div>
                </div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            Hari Terakhir
                        </div>
                    </div>
              </div>
        </div>


  <a href="Daftar_Pembelian/tambah">
  <button class="btn btn-danger" onclick="Tambah()" ><i class="fa fa-plus"></i> Tambah Data</button> </a>
  <button class="btn btn-default" onclick="Edith()"><i class="fa fa-edit"></i> Edit</button>

</div><br />
<table id="dynamic-table" class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>No Transaksi</th>
            <th>Tanggal</th>
      <th>Kd Supp.</th>
            <th>Nama</th>

            <th>Mata Uang</th>
            <th>Keterangan</th>
            <th>Total</th>
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

<script>
  var zonk=''; 
  var save_method;
  var link = "<?php echo site_url('Daftar_Pembelian')?>";
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

//  $(document).ready(function() {
//    table = $('#dynamic-table').DataTable({
//
//        "processing": true, //Feature control the processing indicator.
//        "serverSide": true, //Feature control DataTables' server-side processing mode.
//    "bDestroy": true,
//        "order": [], //Initial no order.
//
//        // Load data for the table's content from an Ajax source
//        "ajax": {
//            "url": "<?php //echo site_url('Daftar_Pembelian/ajax_list')?>//",
//            "type": "POST"
//        },
//
//        //Set column definition initialisation properties.
//        "columnDefs": [
//        {
//            "targets": [ -1 ], //last column
//            "orderable": false, //set not orderable
//        },
//        ],
//
//    });
//
//  }).fnDestroy();

</script>