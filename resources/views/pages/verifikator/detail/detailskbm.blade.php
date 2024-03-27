@extends('pages.verifikator.layouts.default')

@section('title')
    Detail Permohonan Surat Keterangan Belum Menikah
@endsection

@section('content')

@include('pages.verifikator.detail.detailskk')
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-exclamation-circle" style="font-size: 25px; color: orange;"></i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <h5 class="modal-text">Anda yakin ingin menolak surat permohonan!</h5>
                <p><i>Budi Setiawan</i></p>
                <div class="form-group mx-auto" style="max-width: 300px;">
                    <label for="alasan">Alasan ditolak</label>
                    <input type="text" class="form-control" id="alasan" placeholder="Masukkan alasan">
                </div>
            </div>
            <div class="modal-footer justify-content-center">
                <a href="/listskbm" class="btn btn-primary">Simpan</a>
            </div>
        </div>
    </div>
</div>

<!-- konfirmasi modal -->
<div class="modal fade" id="konfirmasiModal" tabindex="-1" role="dialog" aria-labelledby="konfirmasiModalLabel"
aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="konfirmasiModalLabel">Konfirmasi Permohonan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Selanjutnya, surat akan di Acc oleh Lurah
            </div>
            <div class="modal-footer justify-content-center">
                <a href="/listskk" class="btn btn-success">OK</a>
            </div>
        </div>
    </div>
</div>

    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/detailskbn">Budi Setiawan</a></div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form action="/submit-form" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nik">NIK</label>
                                        <input type="text" class="form-control" id="nik" placeholder="137120392719377">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="nama" placeholder="Budi Setiawan">
                                    </div>
                                    <div class="form-group">
                                        <label for="no_hp">No. HP</label>
                                        <input type="text" class="form-control" id="no_hp" placeholder="08975123669">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tempat_lahir">Tempat Lahir</label>
                                        <input type="text" class="form-control" id="tempat_lahir" placeholder="Padang">
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                        <input type="text" class="form-control" id="tanggal_lahir" placeholder="10/01/2000">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="budi@gmail.com">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <input type="text" class="form-control" id="jenis_kelamin" placeholder="Laki-laki">
                                    </div>
                                    <div class="form-group">
                                        <label for="pekerjaan">Pekerjaan</label>
                                        <input type="text" class="form-control" id="pekerjaan" placeholder="PNS">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="agama">Agama</label>
                                        <input type="text" class="form-control" id="agama" placeholder="Islam">
                                    </div>
                                    <div class="form-group">
                                        <label for="status_nikah">Status Nikah</label>
                                        <input type="text" class="form-control" id="status_nikah" placeholder="Belum Menikah">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="provinsi">Provinsi</label>
                                    <input type="text" class="form-control" id="provinsi" placeholder="Sumatera Barat">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="kota">Kota</label>
                                    <input type="text" class="form-control" id="kota" placeholder="Payakumbuh">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="kecamatan">Kecamatan</label>
                                    <input type="text" class="form-control" id="kecamatan" placeholder="Payakumbuh Utara">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="kelurahan">Kelurahan</label>
                                    <input type="text" class="form-control" id="kelurahan" placeholder="Balai Baru">
                                </div>
                                <div class="form-group col-md-8">
                                    <label for="nama_jalan">Nama Jalan</label>
                                    <input type="text" class="form-control" id="nama_jalan" placeholder="Jl.Veteran No.20">
                                </div>
                            </div>
                        <hr style="border-top: 1px solid #ccc; margin: 20px 0;">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="req_surat">Request Surat</label>
                                        <input type="text" class="form-control" id="req_surat" placeholder="Surat Keterangan Belum Menikah">
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_request">Tanggal Request</label>
                                        <input type="text" class="form-control" id="tgl_request" placeholder="19/02/2024">
                                    </div>
                                </div>
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="keterangan">Keterangan</label>
                                        <input type="text" class="form-control" id="keterangan" placeholder="Menunggu Verifikasi">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-12">
                            <button type="button" class="btn btn-primary btn-block mb-3" data-dismiss="">Berkas Persyaratan</button>
                        </div>
                        <figure>
                            <figcaption class="text-center">Kartu Tanda Penduduk (KTP)</figcaption>
                            <img src="image/ktp.jpeg" class="card-img-top" alt="KTP" style="width: 100%; margin-bottom: 10px;">
                        </figure>
                        <figure>
                            <figcaption class="text-center">Kartu Keluarga (KK)</figcaption>
                            <img src="image/fc-kk.jpeg" class="card-img-top" alt="kk" style="width: 100%; margin-bottom: 10px;">
                        </figure>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-3">
                <button type="button" class="btn btn-danger btn-block mb-3" data-toggle="modal" data-target="#exampleModal">Tolak</button>
            </div>
            <div class="col-md-3">
                <button type="button" class="btn btn-success btn-block mb-3" data-toggle="modal" data-target="#konfirmasiModal">Konfirmasi</button>
            </div>
        </div>

    </section>
@endsection
