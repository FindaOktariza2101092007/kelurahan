<!-- Modal -->
<div class="modal fade" id="formEditModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModal">Formulir Edit Surat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <form>
                            <div class="form-group">
                                <label for="nama">Nama Surat</label>
                                <input type="text" class="form-control" id="nama" value="Surat Keterangan Domisili">
                            </div>
                            <!-- Tambahkan field lainnya sesuai kebutuhan -->
                        </form>
                    </div>
                    <div class="col-md-6">
                        <form>
                            <div class="form-group">
                                <label for="kategori">Kategori</label>
                                <select class="form-control" id="kategori">
                                    <option value="SKBM">SKBM</option>
                                    <option value="SKD" selected>SKD</option>
                                    <option value="SKK">SKK</option>
                                    <option value="SKU">SKU</option>
                                </select>
                            </div>
                            <!-- Tambahkan field lainnya sesuai kebutuhan -->
                        </form>
                    </div>
                </div>
                <form>
                    <div class="form-group">
                        <label for="template">Upload Template</label>
                        <input type="file" class="form-control-file" id="template">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</div>
