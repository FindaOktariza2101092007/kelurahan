@extends('pages.lurah.layouts.default')

@section('title')
Beranda
@endsection

@section('content')
        <section class="section">
            <div class="section-header">
                <h1>@yield('title')</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="/dashboard-lurah">Dashboard</a></div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                      <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-file"></i>
                        </div>
                        <div class="card-wrap">
                          <div class="card-header">
                            <h4 style="font-weight: bold; color:black;">Surat Keterangan Kematian</h4>
                          </div>
                        </div>
                        <div class="card-body d-flex justify-content-end">
                            <h5>2</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                      <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="fas fa-file"></i>
                        </div>
                        <div class="card-wrap">
                          <div class="card-header">
                            <h4 style="font-weight: bold; color:black;">Surat Keterangan Usaha</h4>
                          </div>
                        </div>
                        <div class="card-body d-flex justify-content-end">
                            <h5>0</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                      <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="fas fa-file"></i>
                        </div>
                        <div class="card-wrap">
                          <div class="card-header">
                            <h4 style="font-weight: bold; color:black;">Surat Keterangan Domisili</h4>
                          </div>
                        </div>
                        <div class="card-body d-flex justify-content-end">
                            <h5>3</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                      <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-file   "></i>
                        </div>
                        <div class="card-wrap">
                          <div class="card-header">
                            <h4 style="font-weight: bold; color:black;">Surat Keterangan Belum Menikah</h4>
                          </div>
                        </div>
                        <div class="card-body d-flex justify-content-end">
                            <h5>0</h5>
                        </div>
                      </div>
                    </div>

                </div>
                    <div class="card-body">
                      <canvas id="myChart3"></canvas>
                    </div>
                  </div>
                </div>

            </div>
        </section>
@endsection
