<?php $title = "<i class='fa fa-file-text-o'></i>&nbsp;Laporan Penjualan"; ?>
<div id="idImgLoader" style="margin: 0 auto; text-align: center;">
    <img src='<?php echo base_url(); ?>assets/img/loader-dark.gif'/>
</div>
<div id="data" style="display:none;">
    <section class="content">
        <div class="page-header">
            <h1>
                <?php echo $title; ?>
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
                                    <div class="col-md-2" align="right"><span>Periode</span><span> :</span></div>
                                    <div class="col-md-4">
                                        <select class="col-md-6" data-live-search="true" data-width="100%" required=""
                                                name="id_top">
                                            <option value="3"></option>
                                            <option value="4">7</option>
                                            <option value="5">14</option>
                                            <option value="6">30</option>
                                            <option value="7">60</option>
                                        </select>
                                        <?php ?>
                                    </div>
                                    <div class="col-md-1"><span>s/d </span></div>
                                    <div class="col-md-4">
                                        <select class="col-md-6" data-live-search="true" data-width="100%" required=""
                                                name="id_top">
                                            <option value="3"></option>
                                            <option value="4">7</option>
                                            <option value="5">14</option>
                                            <option value="6">30</option>
                                            <option value="7">60</option>
                                        </select>
                                        <button class="btn btn-default btn-xs" onclick="cari()"><i
                                                    class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                                <div>
                                    <div class="col-md-2" align="right"><span>No Transaksi</span><span> :</span></div>
                                    <div class="col-md-4">
                                        <input type="text" name="name" class="input-sm"></input>
                                        <button class="btn btn-default btn-xs" onclick="cari()"><i
                                                    class="fa fa-search"></i>
                                        </button>
                                    </div>
                                    <div class="col-md-1"><span>s/d </span></div>
                                    <div class="col-md-4">
                                        <input type="text" name="name" class="input-sm"/>
                                        <button class="btn btn-default btn-xs" onclick="cari()"><i
                                                    class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                                <div>
                                    <div class="col-md-2" align="right"><span>Pelanggan</span><span> :</span></div>
                                    <div class="col-md-4">
                                        <select class="col-md-6" data-live-search="true" data-width="100%" required=""
                                                name="id_top">
                                            <option value="3"></option>
                                            <option value="4">7</option>
                                            <option value="5">14</option>
                                            <option value="6">30</option>
                                            <option value="7">60</option>
                                        </select>
                                        <button class="btn btn-default btn-xs" onclick="cari()"><i
                                                    class="fa fa-search"></i>
                                        </button>
                                    </div>
                                    <div class="col-md-1"><span>s/d </span></div>
                                    <div class="col-md-4">
                                        <select class="col-md-6" data-live-search="true" data-width="100%" required=""
                                                name="id_top">
                                            <option value="3"></option>
                                            <option value="4">7</option>
                                            <option value="5">14</option>
                                            <option value="6">30</option>
                                            <option value="7">60</option>
                                        </select>
                                        <button class="btn btn-default btn-xs" onclick="cari()"><i
                                                    class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                                <div>
                                    <div class="col-md-2" align="right"><span>Pajak</span><span> :</span></div>
                                    <div class="col-md-4">
                                        <input type="checkbox" name="cek" value="pajak">Hanya tampil yang kena pajak</input>
                                    </div>
                                    <div class="col-md-2"><span>&nbsp;</span></div>
                                    <div class="col-md-6">
                                        <span>&nbsp;</span>
                                    </div>
                                </div>
                                <div>
                                    <div class="col-md-2" align="right"><span>Gudang</span><span> :</span></div>
                                    <div class="col-md-4">
                                        <select class="col-md-6" data-live-search="true" data-width="100%" required=""
                                                name="id_top">
                                            <option value="3"></option>
                                            <option value="4">7</option>
                                            <option value="5">14</option>
                                            <option value="6">30</option>
                                            <option value="7">60</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2"><span>&nbsp;</span></div>
                                    <div class="col-md-6">
                                        <span>&nbsp;</span>
                                    </div>
                                </div>
                                <div>
                                    <div class="col-md-2" align="right"><span>User</span><span> :</span></div>
                                    <div class="col-md-4">
                                        <select class="col-md-6" data-live-search="true" data-width="100%" required=""
                                                name="id_top">
                                            <option value="3"></option>
                                            <option value="4">7</option>
                                            <option value="5">14</option>
                                            <option value="6">30</option>
                                            <option value="7">60</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2"><span>&nbsp;</span></div>
                                    <div class="col-md-6">
                                        <span>&nbsp;</span>
                                    </div>
                                </div>
                                <div>
                                    <div class="col-md-2" align="right"><span>Modul</span><span> :</span></div>
                                    <div class="col-md-4">
                                        <select class="col-md-6" data-live-search="true" data-width="100%" required=""
                                                name="id_top">
                                            <option value="3"></option>
                                            <option value="4">7</option>
                                            <option value="5">14</option>
                                            <option value="6">30</option>
                                            <option value="7">60</option>
                                        </select>
                                        <?php ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-md-offset-0">
                                <div><span>Jenis Laporan</span></div>
                                <div>
                                    <div style="padding-bottom: 4px;">
                                        <a href="laporan_penjualan/cetak_laporan_penjualan_rekap">
                                        <button class="btn btn-default btn-l" onclick="cari()"><i class="fa fa-print"> Laporan Penjualan Rekap</i></button></a>
                                    </div>
                                    <div style="padding-bottom: 4px;">
                                        <a href="laporan_penjualan/cetak_laporan_penjualan_detail">
                                        <button class="btn btn-default btn-l" onclick="cari()"><i class="fa fa-print"> Laporan Penjualan Detail</i></button></a>
                                    </div>
                                    <div style="padding-bottom: 4px;">
                                        <a href="laporan_penjualan/cetak_laporan_penjualan_harian">
                                        <button class="btn btn-default btn-l" onclick="cari()"><i class="fa fa-print"> Laporan Penjualan Harian</i></button></a>
                                    </div>
                                    <div style="padding-bottom: 4px;">
                                        <a href="laporan_penjualan/cetak_laporan_jual_per_pelanggan">
                                        <button class="btn btn-default btn-l" onclick="cari()"><i class="fa fa-print"> Laporan Jual Per Pelanggan Rekap</i></button></a>
                                    </div>
                                    <div style="padding-bottom: 4px;">
                                        <button class="btn btn-default btn-l" onclick="cari()"><i class="fa fa-print"> Laporan Jual Per Pelanggan Detail</i></button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<script>
    $(document).ready(function () {
        //$('#idImgLoader').show(2000);
        $('#idImgLoader').fadeOut(2000);
        setTimeout(function () {
            data();
        }, 2000);
    });

    function data() {
        $('#data').fadeIn();
    }
</script>