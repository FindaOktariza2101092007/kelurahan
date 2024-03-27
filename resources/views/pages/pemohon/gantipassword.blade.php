@extends('pages.pemohon.layouts.default')

@section('title')

@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href=""><span style="font-weight: bold;">Ganti Password</a></span></div>

            </div>
        </div>
        <div class="col-lg-6 mx-auto">
        <div class="section-body ">
            <div class="card justify-content-center">

                <div class="card-body " >
                    <h6 style="text-align: center; font-weight:bold;">Silahkan Masukkan Password lama dan Password Baru</h6>
                    <form action="/gantipassword" >
                        @csrf
                        <div class="form-group">
                            <label for="current_password">Password Saat Ini</label>
                            <input type="password" name="current_password" id="current_password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="new_password">Password Baru</label>
                            <input type="password" name="new_password" id="new_password" class="form-control">
                        </div>

                        <div class="modal-footer justify-content-center">

<a href="/menulayanan" class="btn btn-primary">Simpan Perubahan</a>
</div>
                    </form>
                </div>
            </div>

        </div>





    </section>
@endsection
