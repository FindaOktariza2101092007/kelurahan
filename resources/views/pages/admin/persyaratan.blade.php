@extends('layouts.default')

@section('title')
    Cara Penggunaan
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/penggunaan">Cara Penggunaan</a></div>

            </div>
        </div>
        

        <div class="section-body">
            <div class="card">
                <div class="card-body">


                    <form>
                        <div class="d-flex bd-highlight mb-3 align-items-center">

                            <div class="p-2 bd-highlight">

                                <input type="text" class="babeng babeng-select  ml-0" name="cari">
                            </div>

                            <div class="p-2 bd-highlight">
                                <input class="btn btn-info ml-1 mt-2 mt-sm-0" type="submit" id="babeng-submit"
                                    value="Cari">
                            </div>

                            <div class="ml-auto p-2 bd-highlight">



                                <a href="/admin/users/export" type="submit" value="Import"
                                    class="btn btn-icon btn-primary btn-sm mr-2">
                                    <span class="pcoded-micon"> <i class="fas fa-feather"></i> Create </span>
                                </a>
                    </form>

                </div>
            </div>



            <table id="example" class="table table-striped table-bordered mt-1 table-sm" style="width:100%">
                <thead>
                    <tr style="background-color: #F1F1F1">
                        <th class="text-center py-2 babeng-min-row"> <input type="checkbox" id="chkCheckAll"> All</th>
                        <th>No</th>                        
                        <th>Kategori</th>
                        <th>Persyaratan</th>          
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td class="text-center">
                            <input type="checkbox" name="ids" class="checkBoxClass " value="1">
                        </td>
                        <td>1</td>
                        <td>SKD</td>
                        <td>Surat Pengantar RT/RW
                            <hr>Kartu Tanda Penduduk (KTP)
                            <hr>Sewa Penyewa/Surat Kavling/Bukti Kepemilikan Tempat</td>                        
                        
                        <td class="text-center">
                            <a href="edit" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></span> Edit</a>

                            <form class="d-inline" class="text-center">

                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin akan menghapus data ?')"><i class="fas fa-trash"></i>
                                    Delete</button>
                            </form>

                        </td>
                    </tr>

                </tbody>
            </table>



            <div class="d-flex justify-content-between flex-row-reverse mt-3">
                <div>

                </div>

                <div>
                    <a href="#" class="btn btn-sm  btn-danger mb-2" id="deleteAllSelectedRecord"
                        onclick="return  confirm('Anda yakin menghapus data ini? Y/N')" data-toggle="tooltip"
                        data-placement="top" title="Hapus Terpilih">
                        <i class="fas fa-trash-alt mr-2"></i> Hapus Terpilih</i>
                    </a>
                </div>
            </div>
        </div>
        </div>

        <div class="section-body">
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
