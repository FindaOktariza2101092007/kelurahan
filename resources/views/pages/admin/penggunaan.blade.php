@extends('pages.admin.layouts.default')

@section('title')
    Cara Penggunaan
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Data Master</a></div>
                <div class="breadcrumb-item"><a>Cara Penggunaan</a></div>
            </div>
        </div>


        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Penggunaan Aplikasi</h4>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <textarea class="form-control" id="syarat" rows="10" cols="50">
Daftarkan akun ke website atau aplikasi, lengkapi data diri
Ajukan Permohonan.
Isi Formulir
Setelah Mengajukan Permohonan, Anda Diminta Untuk Mengisi Semua Kolom Yang Ada Pada Halaman Tersebut.                                                                        
Lengkapi Semua Persyaratan Yang Tertera                                
Cek Status Permohonan di Dashboard Permohonan
Dan yang terakhir Cetak Surat Permohonan</textarea>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>

    </section>
@endsection
