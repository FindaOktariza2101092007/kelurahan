@extends('pages.front.layouts.default')

@section('title')
    Pengajuan Surat Keterangan Usaha
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard Permohonan</a></div>
                <div class="breadcrumb-item active"><a>SKD</a></div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                Formulir Permohonan
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <form>
                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input type="text" class="form-control" id="nik" value="1234567891234567" disabled>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" value="John Doe">
                            </div>
                            <div class="form-group">
                                <label for="no_hp">No. HP</label>
                                <input type="text" class="form-control" id="no_hp" value="081234567890">
                            </div>
                            <!-- Tambahkan field lainnya sesuai kebutuhan -->
                        </form>
                    </div>
                    <div class="col-md-6">
                        <form>
                            <div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempat_lahir" value="Jakarta">
                            </div>
                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tanggal_lahir" value="1990-01-01">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" value="john.doe@example.com">
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
                                <select class="form-control" id="jenis_kelamin">
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan" selected>Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="pekerjaan">Pekerjaan</label>
                                <select class="form-control" id="pekerjaan">
                                    <option value="Mahasiswa">Mahasiswa</option>
                                    <option value="Programmer" selected>Programmer</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="provinsi">Provinsi</label>
                                <select class="form-control" id="provinsi">
                                    <option value="">Pilih Provinsi</option>
                                    <option value="Sumatera Barat" selected>Sumatera Barat</option>
                                    <!-- Daftar provinsi -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kota">Kota</label>
                                <select class="form-control" id="kota">
                                    <option value="">Pilih Kota</option>
                                    <option value="Payakumbuh" selected>Payakumbuh</option>
                                    <!-- Daftar kota sesuai provinsi -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nama_jalan">Nama Jalan</label>
                                <textarea class="form-control" id="nama_jalan" rows="3">Jl. Pahlawan No. 123</textarea>
                            </div>
                            <!-- Tambahkan field lainnya sesuai kebutuhan -->
                        </form>
                    </div>
                    <div class="col-md-6">
                        <form>
                            <div class="form-group">
                                <label for="agama">Agama</label>
                                <select class="form-control" id="agama">
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen" selected>Kristen</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="status_nikah">Status Nikah</label>
                                <select class="form-control" id="status_nikah">
                                    <option value="Belum Menikah">Belum Menikah</option>
                                    <option value="Menikah" selected>Menikah</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kecamatan">Kecamatan</label>
                                <select class="form-control" id="kecamatan">
                                    <option value="">Pilih Kecamatan</option>
                                    <option value="Lamposi Tigo Nagori" selected>Lamposi Tigo Nagori</option>
                                    <!-- Daftar kecamatan sesuai kota -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kelurahan">Kelurahan</label>
                                <select class="form-control" id="kelurahan">
                                    <option value="">Pilih Kelurahan</option>
                                    <option value="Sungai Durian" selected>Sungai Durian</option>
                                    <!-- Daftar kelurahan sesuai kecamatan -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="foto">Upload Foto</label>
                                <input type="file" class="form-control-file" id="foto">
                            </div>
                            <!-- Tambahkan field lainnya sesuai kebutuhan -->
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form> <a>Upload Persyaratan</a>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="surat_rt_rw">Surat Pengantar RT/RW *</label>
                                <input type="file" class="form-control-file" id="surat_rt_rw"
                                    accept=".pdf,.doc,.docx" required>
                            </div>
                            <div class="form-group">
                                <label for="ktp">Kartu Tanda Penduduk (KTP) *</label>
                                <input type="file" class="form-control-file" id="ktp"
                                    accept=".pdf,.jpg,.jpeg,.png" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kk">Kartu Keluarga (KK) *</label>
                                <input type="file" class="form-control-file" id="kk"
                                    accept=".pdf,.jpg,.jpeg,.png" required>
                            </div>
                        </div>
                    </div>


                </form>
            </div>

            <div class="card-footer">
                <button data-toggle="modal" data-target="#processingModal" type="button"
                    class="btn btn-primary btn-block">Buat Permohonan Layanan SKD</button>
            </div>
        </div>
    </section>
    <div class="modal fade" id="processingModal" tabindex="-1" role="dialog" aria-labelledby="processingModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="processingModalLabel">Pemberitahuan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Permohonan Anda Akan Kami Proses Dalam 3 Hari Pada Jam Kerja.
                </div>
                <div class="modal-footer">
                    
                    <a href="/dashboard-permohonan" class="btn btn-primary">Kembali ke Dashboard</a>
                </div>
            </div>
        </div>
    </div>
@endsection
