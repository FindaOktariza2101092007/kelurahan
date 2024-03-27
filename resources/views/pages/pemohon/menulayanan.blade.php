@extends('pages.pemohon.layouts.default')

@section('title')
    Layanan Surat
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/dashboard-pemohon">Dashboard Pemohon</a></div>
            </div>
        </div>
        <div class="section-body">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-header text-center">
                                <h4>Surat Keterangan Domisili</h4>
                            </div>
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <div class="card-icon" style="background-color: #B5C0D0;">

                                    <i class="far fa-file-alt" style="color: #ffffff;font: siza 24px;"></i>
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <button class="btn btn-icon btn-primary btn-sm mr-2" type="button" data-toggle="modal"
                                    data-target="#skdModal">

                                    Pengajuan
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-header text-center">
                                <h4>Surat Keterangan Usaha</h4>
                            </div>
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <div class="card-icon" style="background-color: #AAD9BB;">
                                    <i class="far fa-file-alt" style="color: #ffffff;"></i>
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <button class="btn btn-icon btn-primary btn-sm mr-2" type="button" data-toggle="modal"
                                    data-target="#skuModal">
                                    Pengajuan
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-header text-center">
                                <h4> Surat Keterangan Belum Menikah</h4>
                            </div>
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <div class="card-icon" style="background-color: #EE9595;">
                                    <i class="far fa-file-alt" style="color: #ffffff;"></i>
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <button class="btn btn-icon btn-primary btn-sm mr-2" type="button" data-toggle="modal"
                                    data-target="#skbmModal">
                                    Pengajuan
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-header text-center">
                                <h4>Surat Keterangan Kematian</h4>
                            </div>
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <div class="card-icon" style="background-color: #E2C799;">
                                    <i class="far fa-file-alt" style="color: #ffffff;"></i>
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <button class="btn btn-icon btn-primary btn-sm mr-2" type="button" data-toggle="modal"
                                    data-target="#skkModal">
                                    Pengajuan
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
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
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
                    <a href="permohonansku" class="btn btn-primary">Pengajuan</a>
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
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
                    <a href="/permohonanskbm" class="btn btn-primary">Pengajuan</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal skk -->
    <div class="modal fade" id="skkModal" tabindex="-1" role="dialog" aria-labelledby="skkModalLabel"
        aria-hidden="true">
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
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
                    <a href="/permohonanskk" class="btn btn-primary">Pengajuan</a>
                </div>
            </div>
        </div>
    </div>
@endsection
