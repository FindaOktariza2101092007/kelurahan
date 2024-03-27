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
                    <div class="col-md-12">
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
                <div class="row">
                    <div class="col-md-12">
                        <form>
                            <div class="form-group">
                                <label for="syarat">Persyaratan</label>
                                <textarea class="form-control" id="syarat" rows="3">
1. Surat Pengantar RT/RW
2. Kartu Tanda Penduduk (KTP)
3. Sewa Penyewa/Surat Kavling/Bukti Kepemilikan Tempat
                                </textarea>
                            </div>
                            <!-- Tambahkan field lainnya sesuai kebutuhan -->
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Update</button>
            </div>
        </div>
    </div>
</div>
