@extends('pages.admin.layouts.default')

@section('title')
    Beranda
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/dashboard-admin">Dashboard</a></div>
                {{-- <div class="breadcrumb-item"><a href="#">Layout</a></div> --}}
                {{-- <div class="breadcrumb-item">Default Layout</div> --}}
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Jumlah User Masyarakat</h4>
                            </div>
                            <div class="card-body">
                                <h5>10</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Jumlah User Petugas</h4>
                            </div>
                            <div class="card-body">
                                <h5>10</h5>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="fas fa-list-alt"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Jumlah Cara Penggunaan</h4>
                            </div>
                            <div class="card-body">
                                <h5>10</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-file"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Jumlah Layanan Surat</h4>
                            </div>
                            <div class="card-body">
                                <h5>10</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-microchip"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Persyaratan</h4>
                            </div>
                            <div class="card-body">
                                <h5>10</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="card">
                    <div class="card-header">
                      <h4>Silabus dan Bank Soal</h4>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        @forelse ($mapel as $m)
                        @php
                        $totalkd=0;
                        $totalsoal=0;
                            $ambildataajar=DB::table('dataajar')->where('mapel_id',$m->id)->whereNull('deleted_at')->get();
                            foreach ($ambildataajar as $d) {
                                $jmlkd=DB::table('kompetensidasar')->whereNull('deleted_at')->where('dataajar_id',$d->id)->count();
                                $totalkd+=$jmlkd;
                                $jmlsoal=DB::table('banksoal')->whereNull('deleted_at')->where('dataajar_id',$d->id)->count();
                                $totalsoal+=$jmlsoal;
                            }
                        @endphp
                        <div class="col text-center col-6 col-md-3 mt-2">

                            <img alt="image" src="https://ui-avatars.com/api/?name={{$m->nama}}&color=7F9CF5&background=EBF4FF&length=3" class="img-thumbnail" data-toggle="tooltip" title="{{$m->nama}}" width="100px" height="100px" style="object-fit:cover;">

                            <div class="mt-2 font-weight-bold">{{$m->nama}}</div>
                            <div class="text-muted text-small"><span class="text-primary"><i class="fas fa-caret-up"></i></span> {{$totalkd}} Silabus </div>
                            <div class="text-muted text-small"><span class="text-primary"><i class="fas fa-caret-up"></i></span> {{$totalsoal}} Soal </div>
                          </div>

                        @empty

                        @endforelse


                      </div>
                    </div>
                  </div> --}}

            {{-- <div class="card">
                <div class="card-header">
                <h4>Contoh Halaman</h4>
                </div>
                <div class="card-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="card-footer bg-whitesmoke">
                This is card footer
                </div>
            </div> --}}


            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            {{-- <h4>Jumlah Siswa : {{$laki+$perempuan}}</h4> --}}
                        </div>
                        <div class="card-body">
                            <canvas id="myChart3"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
