<?php $title = "<i class='fa fa-plus'></i>&nbsp;Item Baru"; ?>
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
                            <div class="col-xs-12">

                                <ul class="nav nav-tabs nav-justified">
                                    <li class="active">
                                        <a href="#DataUmum" data-toggle="tab">Data Umum</a>
                                    </li>
                                    <li>
                                        <a href="#Satuan" data-toggle="tab">Satuan</a>
                                    </li>
                                    <li>
                                        <a href="#Rakitan" data-toggle="tab">Rakitan</a>
                                    </li>
                                    <li>
                                        <a href="#HargaJual" data-toggle="tab">Harga Jual</a>
                                    </li>
                                    <li>
                                        <a href="#PotonganHargaJual" data-toggle="tab">Potongan Harga Jual</a>
                                    </li>
                                    <li>
                                        <a href="#Lain-lain" data-toggle="tab">Lain-lain</a>
                                    </li>
                                    <li>
                                        <a href="#Akunting" data-toggle="tab">Akunting</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="DataUmum" class="tab-pane active">
                                        <!--                    <h3>Data Umum</h3>-->
                                        <?php $this->load->view('item_baru/view_data_umum'); ?>
                                    </div>
                                    <div id="Satuan" class="tab-pane">
                                        <!--                    <h3>Satuan</h3>-->
                                        <?php $this->load->view('item_baru/view_satuan'); ?>
                                    </div>
                                    <div id="Rakitan" class="tab-pane">
                                        <!--                    <h3>Rakitan</h3>-->
                                        <?php $this->load->view('item_baru/view_rakitan') ?>
                                    </div>
                                    <div id="HargaJual" class="tab-pane">
                                        <!--                    <h3>Harga Jual</h3>-->
                                        <?php $this->load->view('item_baru/view_harga_jual') ?>
                                    </div>
                                    <div id="PotonganHargaJual" class="tab-pane">
                                        <!--                    <h3>PotonganHargaJual</h3>-->
                                        <?php $this->load->view('item_baru/view_potongan_harga_jual') ?>
                                    </div>
                                    <div id="Lain-lain" class="tab-pane">
                                        <!--                    <h3>Lain-lain</h3>-->
                                        <?php $this->load->view('item_baru/view_lain_lain') ?>
                                    </div>
                                    <div id="Akunting" class="tab-pane">
                                        <!--                    <h3>Akunting</h3>-->
                                        <?php $this->load->view('item_baru/view_akunting') ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div>
                                    <button class="btn btn-primary" type="button"><i class="fa fa-save"></i> Save</button><span> </span>
                                    <button class="btn btn-warning" type="button"><i class="fa fa-close"></i> Batal</button>
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