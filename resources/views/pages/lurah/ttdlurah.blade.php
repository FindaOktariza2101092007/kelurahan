@extends('pages.lurah.layouts.default')

@section('title')
    Tanda Tangan Surat Oleh Lurah
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/ttdlurah">Budi Setiawan</a></div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <button type="button" class="btn btn-primary btn-block mb-3" data-toggle="modal" data-target="#exampleModal" >Tanda Tangan</button>
            </div>
            <div class="col-md-3">
                <a href="/dashboard-lurah" class="btn btn-success btn-block mb-3">Konfirmasi</a>
            </div>
        </div>

        <div class="col-md-16">
            <div class="card">
                <div class="card-body text-center">
                        <img src="image/suratdomisili.png" class="card-img-top" alt="KTP" style="width: 75%; margin-bottom: 8px;">
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg">
                <div class="modal-body text-center p-5">
                    <h4 class="mb-4">Anda yakin ingin menandatangani surat permohonan?</h4>
                    <button type="button" class="btn btn-success btn-lg mr-3" data-dismiss="modal">Ya</button>
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal2">Tidak</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg">
                <div class="modal-body p-5">
                    <div class="form-group">
                        <label for="nama" class="font-weight-bold" style="font-weight: bold; color:black;font-size: 16px;"><h5>Alasan ditolak</h5></label>
                        <textarea class="form-control" id="alasan" rows="3" placeholder="Masukkan Alasan"></textarea>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <a href="/acc-skd" class="btn btn-primary">Simpan</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#exampleModal2').on('show.bs.modal', function (e) {
            $('#exampleModal').modal('hide');
        });
    </script>


 @endsection

