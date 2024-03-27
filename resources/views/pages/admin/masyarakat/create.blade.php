<!-- Modal -->
<div class="modal fade" id="formCreateModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModal">Formulir Registrasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <form>
                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input type="text" class="form-control" id="nik" placeholder="Masukkan NIK" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap" required>
                            </div>
                            <div class="form-group">
                                <label for="no_hp">No. HP</label>
                                <input class="form-control" id="no_hp" placeholder="Masukkan No. HP" type="number" required>
                            </div>
                            <!-- Tambahkan field lainnya sesuai kebutuhan -->
                        </form>
                    </div>
                    <div class="col-md-6">
                        <form>
                            <div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempat_lahir" placeholder="Masukkan Tempat Lahir" required>
                            </div>
                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Masukkan Email" required>
                            </div>
                            <!-- Tambahkan field lainnya sesuai kebutuhan -->
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <form>
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select class="form-control" id="jenis_kelamin" required>
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="pekerjaan">Pekerjaan</label>
                                <select class="form-control" id="pekerjaan" required>
                                    <option value="">Pilih Jenis Pekerjaan</option>
                                    <option value="Mahasiswa">Mahasiswa</option>
                                    <option value="Programmer">Programmer</option>
                                </select>
                            </div>
                            <!-- Tambahkan field lainnya sesuai kebutuhan -->
                        </form>
                    </div>
                    <div class="col-md-6">
                        <form>
                            <div class="form-group">
                                <label for="agama">Agama</label>
                                <select class="form-control" id="agama" required>
                                    <option value="">Pilih Agama</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="status_nikah">Status Nikah</label>
                                <select class="form-control" id="status_nikah" required>
                                    <option value="">Pilih Status Nikah</option>
                                    <option value="Belum Menikah">Belum Menikah</option>
                                    <option value="Menikah">Menikah</option>
                                </select>
                            </div>
                            <!-- Tambahkan field lainnya sesuai kebutuhan -->
                        </form>
                    </div>
                </div>
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="provinsi">Provinsi</label>
                            <select class="form-control" id="provinsi" required>
                                <option value="">Pilih Provinsi</option>
                                <!-- Daftar provinsi -->
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="kota">Kota</label>
                            <select class="form-control" id="kota" required>
                                <option value="">Pilih Kota</option>
                                <!-- Daftar kota sesuai provinsi -->
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="kecamatan">Kecamatan</label>
                            <select class="form-control" id="kecamatan" required>
                                <option value="">Pilih Kecamatan</option>
                                <!-- Daftar kecamatan sesuai kota -->
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="kelurahan">Kelurahan</label>
                            <select class="form-control" id="kelurahan" required>
                                <option value="">Pilih Kelurahan</option>
                                <!-- Daftar kelurahan sesuai kecamatan -->
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="rw">RW</label>
                            <input type="number" class="form-control" id="rw" placeholder="001" maxlength="3" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="rt">RT</label>
                            <input type="number" class="form-control" id="rt" placeholder="001" maxlength="3" required>
                        </div>
                    </div>
                    
                
                
                    <div class="form-group">
                        <label for="nama_jalan">Nama Jalan</label>
                        <textarea class="form-control" id="nama_jalan" rows="3" placeholder="Masukkan Nama Jalan" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="foto">Upload Foto</label>
                        <input type="file" class="form-control-file" id="foto" required>
                    </div>
                </form>
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Simpan</button>
            </div>
        </div>
    </div>
</div>
