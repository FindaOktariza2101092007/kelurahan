@extends('pages.pemohon.layouts.default')

@section('title')

@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href=""><span style="font-weight: bold;">Tentang Aplikasi</a></span></div>

            </div>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-body" >
                    <div style="display: flex; align-items:center; justify-content:center;">
                    <img src="images/logo.png" alt="logo" style="width:50px; height:auto; margin-right:10px;" >
                    <p style="text-align: center; font-weight:bold;">E-kelurahan Kota Payakumbuh</p>

                    </div>
                    <div class="card-body">
                    <p style="text-align: center; font-weight:bold;">E-kelurahan Payakumbuh merupakan sebuah aplikasi dan website yang digunakan
                    untuk mempermudah masyarakat dalam mengajukan surat permohonan agar cepat dan efektif tanpa harusmengantri di kantor kelurahan.
                    Adapun Layanan yang tersedia yaitu Surat Keterangan Belum Nikah, Surat Keterangan Usaha, Surat Keterangan Domisili dan Surat Keterangan Kematian.</p>

                    <div style="display: flex; align-items:center; justify-content:right;">
                    <form action="/menulayanan" >
                        <button type="submit" class="btn btn-primary">Kembali</button>
                    </form>
                    </div>
                </div>
                </div>
            </div>
        </div>





    </section>
@endsection
