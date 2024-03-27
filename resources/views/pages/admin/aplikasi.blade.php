@extends('pages.admin.layouts.default')

@section('title')
    Pengaturan Aplikasi
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
            <div class="section-header-breadcrumb">                
                <div class="breadcrumb-item active"><a href="#">Pengaturan</a></div>
                <div class="breadcrumb-item"><a>Pengaturan Aplikasi</a></div>
            </div>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Pengaturan Aplikasi</h4>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="form-group col-md-5 col-5 mt-0 ml-5">
                                <label for="app_nama">Nama Kelurahan</label>
                                <input type="text" name="app_nama" id="app_nama" class="form-control">
                            </div>
                            <div class="form-group col-md-5 col-5 mt-0 ml-5">
                                <label for="pagination">Pagination</label>
                                <input type="text" name="pagination" id="pagination" class="form-control">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-right">
                    <button type="button" class="btn btn-warning">Batal</button>
                    <button type="button" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </section>
@endsection
