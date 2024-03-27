@extends('pages.front.layouts.default')

@section('title')
    Permohonan
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/dashboard-front">Dashboard Permohonan</a></div>
            </div>
        </div>
        <div class="section-body">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-header text-center">
                                <h4>Layanan Surat Keterangan Domisili</h4>
                            </div>
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <div class="card-icon bg-primary">
                                    
                                    <i class="fa-solid fa-file-circle-plus fa-xl" style="color: #ffffff;"></i>
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <button class="btn btn-icon btn-primary btn-sm mr-2" type="button" data-toggle="modal" data-target="#skdModal">
                                    
                                    Pengajuan
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-header text-center">
                                <h4>Layanan Surat Keterangan Usaha</h4>
                            </div>
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">                                
                                <div class="card-icon bg-success">
                                    <i class="fa-solid fa-file-circle-plus fa-xl" style="color: #ffffff;"></i>
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <button class="btn btn-icon btn-primary btn-sm mr-2" type="button" data-toggle="modal" data-target="#skuModal">
                                    Pengajuan
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-header text-center">
                                <h4>Layanan Surat Keterangan Belum Menikah</h4>
                            </div>
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <div class="card-icon bg-warning">
                                    <i class="fa-solid fa-file-circle-plus fa-xl" style="color: #ffffff;"></i>
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <button class="btn btn-icon btn-primary btn-sm mr-2" type="button" data-toggle="modal" data-target="#skbmModal">
                                    Pengajuan
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-header text-center">
                                <h4>Layanan Surat Keterangan Kematian</h4>
                            </div>
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <div class="card-icon bg-danger">
                                    <i class="fa-solid fa-file-circle-plus fa-xl" style="color: #ffffff;"></i>
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <button class="btn btn-icon btn-primary btn-sm mr-2" type="button" data-toggle="modal" data-target="#skkModal">
                                    Pengajuan
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('pages.front.permohonan.syarat')
    
    @endsection
    