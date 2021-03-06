<?php $title = "<i class='fa fa-file-text-o'></i>&nbsp;Laporan Pembayaran Dengan Kartu Bayar"; ?>
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
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-md-offset-0">
                                <div><span>Jenis Laporan</span></div>
                                <div>
                                    <div style="padding-bottom: 4px;">
                                        <a href="Laporan_Pembayaran_dengan_Kartu_Bayar/cetak_laporan_pembayaran_rekap">
                                        <button class="btn btn-default btn-l" onclick="cari()"><i class="fa fa-print"> Laporan Pembayaran Rekap</i></button></a>
                                    </div>
                                    <div style="padding-bottom: 4px;">
                                        <a href="Laporan_Pembayaran_dengan_Kartu_Bayar/cetak_laporan_pembayaran_detail">
                                        <button class="btn btn-default btn-l" onclick="cari()"><i class="fa fa-print"> Laporan Pembayaran Detail</i></button></a>
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