<div class="row">
    <div class="col-xs-12">
        <div id="form-data" style="display:none;">
            <div class="widget-box">
                <div class="widget-header">
                    <h4 class="widget-title">Tambah Jenis</h4>

                    <div class="widget-toolbar">
                        <a href="#" data-action="collapse">
                            <i class="ace-icon fa fa-chevron-up"></i>
                        </a>

                        <a onclick="Batal()" data-action="close">
                            <i class="ace-icon fa fa-times"></i>
                        </a>
                    </div>
                </div>

                <div class="widget-body">
                    <div class="widget-main">
                        <div class="row">
                            <div class="col-xs-12">
                                <form class="form-horizontal" role="form" id="formAksi">
                                    <input type="hidden" name="kode_item_jenis">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label no-padding-right" for="form-field-1">
                                            Jenis </label>
                                        <div class="col-sm-10">
                                            <input type="text" id="item_jenis_nama" name="item_jenis_nama"
                                                   placeholder="" class="col-xs-10 col-sm-5"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label no-padding-right" for="form-field-1">
                                            Keterangan</label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control" id="item_jenis_ket" name="item_jenis_ket"
                                                      placeholder="" class="col-xs-10 col-sm-5"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-offset-2 col-md-9">
                                        <button class="btn btn-info" type="button" id="btn_save" onclick="save()">
                                            <i class="ace-icon fa fa-check bigger-110"></i>
                                            Submit
                                        </button>

                                        &nbsp; &nbsp; &nbsp;
                                        <button class="btn" type="reset">
                                            <i class="ace-icon fa fa-undo bigger-110"></i>
                                            Reset
                                        </button>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div>
        </div><!-- /.row -->
    </div>
</div>