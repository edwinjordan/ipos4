<div class="widget-body">
    <div class="widget-main">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <div class="col-md-2" align="right"><span>Tipe Item</span><span> :</span></div>
                    <div class="col-md-4">
                        <input type="radio" name="cek" value="pajak">Barang</input><br>
                        <input type="radio" name="cek" value="pajak">Jasa</input><br>
                        <input type="radio" name="cek" value="pajak">Rakitan</input><br>
                        <input type="radio" name="cek" value="pajak">Non Inventory</input>
                    </div>
                    <div class="col-md-11"><span>&nbsp;</span></div>
                    <div class="col-md-11">
                        <span>&nbsp;</span>
                    </div>
                </div>
                <div>
                    <div class="col-md-2" align="right"><span>Kode Item</span><span> :</span></div>
                    <div class="col-md-9">
                        <input type="text" id="kode_item_tipe" name="kode_item_tipe" class="input-sm"></input>
                    </div>
                </div>
                <div>
                    <div class="col-md-2" align="right"><span>Nama Item</span><span> :</span></div>
                    <div class="col-md-9">
                        <input type="text" id="item_nama" name="item_nama" class="input-sm"></input>
                    </div>
                </div>

                <div>
                    <div class="col-md-2" align="right"><span>Jenis</span><span> :</span></div>
                    <div class="col-md-4">
                        <select class="col-md-6" data-live-search="true" data-width="100%" required=""
                                id="kode_item_jenis" name="kode_item_jenis">
                            <option value="3"></option>
                            <option value="4">7</option>
                            <option value="5">14</option>
                            <option value="6">30</option>
                            <option value="7">60</option>
                        </select>
                        <button class="btn btn-default btn-xs" onclick="cari()"><i
                                    class="fa fa-plus"></i>
                        </button>
                    </div>
                    <div class="col-md-1"><span>Merek :</span></div>
                    <div class="col-md-4">
                        <select class="col-md-6" data-live-search="true" data-width="100%" required=""
                                id="kode_merek" name="kode_merek">
                            <option value="3"></option>
                            <option value="4">7</option>
                            <option value="5">14</option>
                            <option value="6">30</option>
                            <option value="7">60</option>
                        </select>
                        <button class="btn btn-default btn-xs" onclick="cari()"><i
                                    class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div>
                    <div class="col-md-2" align="right"><span>Mata Uang</span><span> :</span></div>
                    <div class="col-md-4">
                        <select class="col-md-6" data-live-search="true" data-width="100%" required=""
                                id="item_stok_min" name="item_stok_min">
                            <option value="3"></option>
                            <option value="4">7</option>
                            <option value="5">14</option>
                            <option value="6">30</option>
                            <option value="7">60</option>
                        </select>
                    </div>
                    <div class="col-md-10"><span></span></div>
                    <div class="col-md-11">
                    </div>
                </div>
                <div>
                    <div class="col-md-2" align="right"><span>Rak</span><span> :</span></div>
                    <div class="col-md-9">
                        <input type="text" id="kode_rak" name="kode_rak" class="input-sm"></input>
                    </div>
                </div>
                <div>
                    <div class="col-md-2" align="right"><span>Dept / Gudang</span><span> :</span></div>
                    <div class="col-md-4">
                        <select class="col-md-6" data-live-search="true" data-width="100%" required=""
                                id="kode_gudang" name="kode_gudang">
                            <option value="3"></option>
                            <option value="4">7</option>
                            <option value="5">14</option>
                            <option value="6">30</option>
                            <option value="7">60</option>
                        </select>
                    </div>
                    <div class="col-md-10"><span></span></div>
                    <div class="col-md-11">
                    </div>
                </div>
                <div>
                    <div class="col-md-2" align="right"><span>Ketarangan</span><span> :</span></div>
                    <div class="col-md-9">
                        <textarea id="item_ket" name="item_ket"></textarea>
                    </div>
                </div>
                <div>
                    <div class="col-md-2" align="right"><span>Tipe Item</span><span> :</span></div>
                    <div class="col-md-4">
                        <input type="radio" name="cek" value="pajak">Barang</input><br>
                        <input type="radio" name="cek" value="pajak">Jasa</input>
                    </div>
                    <div class="col-md-11"><span>&nbsp;</span></div>
                    <div class="col-md-11">
                        <span>&nbsp;</span>
                    </div>
                </div>
                <div>
                    <div class="col-md-2" align="right"><span>Pilihan</span><span> :</span></div>
                    <div class="col-md-4">
                        <input type="checkbox" name="cek" value="pajak">Barang</input><br>
                        <input type="checkbox" name="cek" value="pajak">Jasa</input><br>
                    </div>
                    <div class="col-md-11"><span>&nbsp;</span></div>
                    <div class="col-md-11">
                        <span>&nbsp;</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>