<!-- Modal SKD -->
<div class="modal fade" id="skdModal" tabindex="-1" role="dialog" aria-labelledby="skdModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="skdModalLabel">Layanan Surat Keterangan Domisili </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Berikut persyaratan yang diperlukan untuk melakukan proses layanan:</p>
                <ul>
                    <li>Surat Pengantar RT/RW *</li>
                    <li>Kartu Tanda Penduduk (KTP) *</li>
                    <li>Kartu Keluarga (KK) *</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <a href="/permohonanskd" class="btn btn-primary">Pengajuan</a>

            </div>
        </div>
    </div>
</div>

<!-- Modal sku -->
<div class="modal fade" id="skuModal" tabindex="-1" role="dialog" aria-labelledby="skuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="skuModalLabel">Layanan Surat Keterangan Usaha </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Berikut persyaratan yang diperlukan untuk melakukan proses layanan:</p>
                <ul>
                    <li>Surat Pengantar RT/RW *</li>
                    <li>Kartu Tanda Penduduk (KTP) *</li>
                    <li>Kartu Keluarga (KK) *</li>
                    <li>Scan Surat Keterangan Domisili</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <a href="{{ route('sku') }}" class="btn btn-primary">Pengajuan</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal skbm -->
<div class="modal fade" id="skbmModal" tabindex="-1" role="dialog" aria-labelledby="skbmModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="skbmModalLabel">Layanan Surat Keterangan Belum Menikah </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Berikut persyaratan yang diperlukan untuk melakukan proses layanan:</p>
                <ul>
                    <li>Surat Pengantar RT/RW *</li>
                    <li>Kartu Tanda Penduduk (KTP) *</li>
                    <li>Kartu Keluarga (KK) *</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <a href="{{ route('skbm') }}" class="btn btn-primary">Pengajuan</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal skk -->
<div class="modal fade" id="skkModal" tabindex="-1" role="dialog" aria-labelledby="skkModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="skkModalLabel">Layanan Surat Keterangan Kematian </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Berikut persyaratan yang diperlukan untuk melakukan proses layanan:</p>
                <ul>
                    <li>Surat Pengantar RT/RW *</li>
                    <li>Kartu Tanda Penduduk (KTP) *</li>
                    <li>Kartu Keluarga (KK) *</li>
                    <li>Scan Surat Pengantar Dari RS (jika ada)</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <a href="{{ route('skk') }}" class="btn btn-primary">Pengajuan</a>
            </div>
        </div>
    </div>
</div>
