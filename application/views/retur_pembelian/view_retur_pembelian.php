<?php $title = "<i class='fa fa-tags'></i>&nbsp;Retur Pembelian"; ?>
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
               Kata Kunci :
             </div>
           </div>
           <div class="col-xs-8">
            <div class="form-group">
             <!-- <a data-toggle="modal" href="#modal-1"> -->
              <input class="form-control" name="cari" id="cari" required="" type="text">
              <!-- </a> -->
            </div>
          </div>
          <div class="col-xs-2">
            <div class="form-group">
              <button onclick="cari()" class="btn btn-default btn-sm"><i class="fa fa-search" aria-hidden="true"></i>
              </button>
              <button class="btn btn-default btn-sm"><i class="fa fa-refresh" aria-hidden="true"></i>
              </button>
            </div>
          </div>
        </div>

        <div class="col-xs-12">
         <div class="col-xs-2">
          <div class="form-group">
           Dept / Gudang :
         </div>
       </div>
       <div class="col-xs-2">
        <div class="form-group">
         <select name="kode_gudang" id="kode_gudang" class="form-control" data-live-search="true" data-width="100%" required>
          <option value="">- Pilih Gudang -</option>
          <?php foreach ($gudang as $key): ?>
            <option value="<?php echo $key->id_gudang ?>"><?php echo $key->gudang_ket ?></option>
          <?php endforeach ?>
        </select>
      </div> 
    </div>
    <div class="col-xs-4">
      <div class="form-group">
        <p align="center"> Tampilkan Data Selama :</p>
      </div>
    </div>
    <div class="col-xs-1">
      <div class="form-group">
        <select class="form-control" data-live-search="true" data-width="100%" required="" id="min_tgl" name="min_tgl">
          <option value="7">7 </option>
          <option value="10">14 </option>
          <option value="30">30 </option>
          <option value="45">45 </option>
          <option value="120">120 </option>
        </select>
      </div>
    </div>
    <div class="col-xs-3">
      <div class="form-group">
        Hari Terakhir
      </div>
    </div>
  </div>
  <button class="btn btn-default" onclick="reload_table()"><i class="fa fa-refresh"></i> Reload</button>
  <a href="<?php echo base_url('Retur_Pembelian/tambah') ?>"><button class="btn btn-default" onclick="Tambah()"><i class="fa fa-plus"></i> Tambah Data</button></a>
</div><br />
<table id="dynamic-table" class="table table-striped table-bordered table-hover">
  <thead>
    <tr>
      <th>No. Transaksi</th>
      <th>Tanggal</th>
      <th>Kode Supplier</th>
      <th>Nama Supplier</th>
      <th>Mata Uang</th>
      <th>Keterangan</th>
      <th>Total</th>
      <th>User Buat</th>
      <th>User Ubah</th>
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

<script>
	var table;
  var url = "<?php echo site_url('Retur_Pembelian/ajax_list')?>";

  function cari() {
    var cari = document.getElementById('cari').value;
    var min_tgl = document.getElementById('min_tgl').value;
    var kode_gudang = document.getElementById('kode_gudang').value;
    this.url = "<?php echo site_url('Retur_Pembelian/ajax_cari/')?>/" + cari +"/"+ min_tgl +"/"+ kode_gudang;
    this.table.ajax.url(url).load();
  }

  $(document).ready(function(){
    //$('#idImgLoader').show(2000);
    reload();
    showTable();
  });

  function reload() {
   $('#idImgLoader').fadeOut(2000);
   setTimeout(function(){
    $('#data').fadeIn();
  }, 2000);
 }

 function reload_table() {
   this.table.ajax.url("<?php echo site_url('Retur_Pembelian/ajax_list')?>").load();
 }

 function showTable() {
   this.table = $('#dynamic-table').DataTable({ 
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "bDestroy": true,
        "bFilter": false,
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
          "url": url,
          "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
          "defaultContent": "-",
          "targets": "_all",
            "targets": [ -1 ], //last column
            "orderable": false, //set not orderable
          },
          ],
        });
 }
</script>