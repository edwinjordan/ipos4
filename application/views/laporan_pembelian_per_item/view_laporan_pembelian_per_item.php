<style type="text/css">
	#cob{
		padding-bottom: 3px;
	}
</style>
<?php $title = "<i class='fa fa-file-text-o'></i>&nbsp;Laporan Pembelian Per Item"; ?>
<div id="idImgLoader" style="margin: 0 auto; text-align: center;">
  <img src='<?php echo base_url();?>assets/img/loader-dark.gif' />
</div>
<div id="data" style="display:none;">
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
        <div class="col-md-8">
            <div>
                <div class="col-md-2"><span>Dari Item</span><span> :</span></div>
                <div class="col-md-4">
                    <input class="input-sm" type="text" name="name" size="22"/>
                    <button class="btn btn-default btn-xs" onclick="cari_pesanan()" ><i class="fa fa-search"></i> </button>
                </div>
                <div class="col-md-2"><span>s/d </span></div>
                <div class="col-md-4">
                    <input class="input-sm" type="text" name="name" size="22" />
                    <button class="btn btn-default btn-xs" onclick="cari_pesanan()" ><i class="fa fa-search"></i> </button>
                </div>
            </div>
            <div>
                <div class="col-md-2"><span>Periode</span><span> :</span></div>
                <div class="col-md-4">
                <select name="" class="col-md-8">
                    <option value="">12/12/2018</option>
                </select>
                </div>
                <div class="col-md-2"><span>s/d </span></div>
                <div class="col-md-4">
                <select name="" class="col-md-8">
                    <option value="">12/12/2018</option>
                </select>
                </div>
            </div>
            <div>
                <div class="col-md-2"><span>Supplier</span><span> :</span></div>
                <div class="col-md-4">
                <select name="" class="col-md-8">
                    <option value=""> </option>
                </select>
                    <button class="btn btn-default btn-xs" onclick="cari_pesanan()" ><i class="fa fa-search"></i> </button>
                </div>
                <div class="col-md-2"><span>s/d </span></div>
                <div class="col-md-4">
                <select name="" class="col-md-8">
                    <option value=""> </option>
                </select>
                    <button class="btn btn-default btn-xs" onclick="cari_pesanan()" ><i class="fa fa-search"></i> </button>
                </div>
            </div>
            <div>
                <div class="col-md-2"><span>Jenis</span><span> :</span></div>
                <div class="col-md-4">
                <select name="" class="col-md-8">
                    <option value=""></option>
                    <option value=""></option>
                </select>
                </div>
                <div class="col-md-2">
                    <span>&nbsp; </span>
                </div>
                <div class="col-md-6">
                <span>&nbsp;</span>
                </div>
            </div>
            <div>
                <div class="col-md-2"><span>Tipe</span><span> :</span></div>
                <div class="col-md-4">
                	<input type="checkbox" name="tipe" value="Barang">Barang<br>
                	<input type="checkbox" name="tipe" value="Jasa">Jasa<br>
                	<input type="checkbox" name="tipe" value="Rakitan">Rakitan<br>
                	<input type="checkbox" name="tipe" value="non_inventory">Non Inventory<br>
                </div>
                <div class="col-md-10">
                    <span>&nbsp; </span>
                </div>
                <div class="col-md-11">
                <span>&nbsp;</span>
                </div>
            </div>
            <div align="left">
                <div class="col-md-2"><span>Urut Berdasar</span><span> :</span></div>
                <div class="col-md-4">
                <select name="">
                    <option value="">Kode Item</option>
                    <option value="">Nama Item</option>
                    <option value="">Jenis</option>
                    <option value="">Jumlah</option>
                </select>
                     <button class="btn btn-default btn-xs" onclick="cari_pesanan()" ><i class="fa fa-sort-up"></i> </button>
                    <button class="btn btn-default btn-xs" onclick="cari_pesanan()" ><i class="fa fa-sort-down"></i> </button>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-md-offset-0">
            <div><span>Jenis Laporan :</span></div>
            <div>
                <div role="group" class="btn-group">
                <div id="cob">
                <a href="Laporan_Pembelian_per_Item/cetak_beli_item">
                <button class="btn btn-default" type="button"><i class="fa fa-print"> Laporan Beli Per Item</i></button></a></div>
                <div id="cob">
                <a href="Laporan_Pembelian_per_Item/cetak_beli_item">
                <button class="btn btn-default" type="button"><i class="fa fa-print"> Laporan Beli Per Item Per Jenis</i></button></a></div>
                <div>
                <a href="Laporan_Pembelian_per_Item/cetak_beli_item">
                <button class="btn btn-default" type="button"><i class="fa fa-print"> Laporan Beli Per Item Per Supplier</i></button></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
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
</script>