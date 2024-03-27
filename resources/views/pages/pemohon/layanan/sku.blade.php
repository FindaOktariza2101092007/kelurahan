@extends('pages.pemohon.layouts.default')

@section('title')
    Surat Keterangan Usaha
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/monitoring-pemohon"><span style="font-weight: bold;">monitoring</a></span></div>

            </div>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="d-flex bd-highlight mb-3 align-items-center">
                            <div class="ml-auto p-2 bd-highlight">
                    </form>

                </div>
            </div>

            <table id="example" class="table table-striped table-bordered mt-1 table-sm" style="width:100%">
                <thead>
                    <tr style="background-color: #445069">
                        <th class="text-center" style="color: #FFFFFF; font-weight: bold;"> No</th>
                        <th class="text-center" style="color: #FFFFFF; font-weight: bold;">Tanggal Pengajuan</th>
                        <th class="text-center" style="color: #FFFFFF; font-weight: bold;">No Permohonan</th>
                        <th class="text-center"style="color: #FFFFFF; font-weight: bold;">Surat</th>
                        <th class="text-center" style="color: #FFFFFF; font-weight: bold;">Nama Pemohon </th>
                        <th class="text-center" style="color: #FFFFFF; font-weight: bold;">Status</th>
                    </tr>
                </thead>
                <tbody>

                    <tr style="background-color: #FCFFE7">
                        <td class="text-center">1 </td>
                        <td class="text-center">03/03/2024</td>
                        <td class="text-center">033</td>
                        <td class="text-center">Surat Keterangan Usaha</td>
                        <td class="text-center">Budi Setiawan</td>
                        <td class="text-center"> Diproses</td>
                    </tr>

                </tbody>
            </table>



            <div class="d-flex justify-content-between flex-row-reverse mt-3">


                <div class="pagination" style="text-align: right;">

                    <span class="text-muted">Showing 1 to 1 of 1 entries</span>
                </div>


            </div>

        </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form>
                    <div class="d-flex bd-highlight mb-3 align-items-center">
                        <div class="ml-auto p-2 bd-highlight">
                </form>

            </div>
        </div>

        <table id="example" class="table table-striped table-bordered mt-1 table-sm" style="width:100%">
            <thead>
                <tr style="background-color: #445069">
                    <th class="text-center" style="color: #FFFFFF; font-weight: bold;"> No</th>
                    <th class="text-center" style="color: #FFFFFF; font-weight: bold;">Tanggal Pengajuan</th>
                    <th class="text-center" style="color: #FFFFFF; font-weight: bold;">No Permohonan</th>
                    <th class="text-center"style="color: #FFFFFF; font-weight: bold;">Surat</th>
                    <th class="text-center" style="color: #FFFFFF; font-weight: bold;">Nama Pemohon </th>
                    <th class="text-center" style="color: #FFFFFF; font-weight: bold;">Status</th>
                </tr>
            </thead>
            <tbody>

                <tr style="background-color: #FCFFE7">
                    <td class="text-center">1 </td>
                    <td class="text-center">03/03/2024</td>
                    <td class="text-center">033</td>
                    <td class="text-center">Surat Keterangan Usaha</td>
                    <td class="text-center">Budi Setiawan</td>
                    <td class="text-center"><button class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                            Ditolak</td>
                </tr>

            </tbody>
        </table>



        <div class="d-flex justify-content-between flex-row-reverse mt-3">


            <div class="pagination" style="text-align: right;">

                <span class="text-muted">Showing 1 to 1 of 1 entries</span>
            </div>


        </div>

        </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form>
                    <div class="d-flex bd-highlight mb-3 align-items-center">
                        <div class="ml-auto p-2 bd-highlight">
                </form>

            </div>
        </div>

        <table id="example" class="table table-striped table-bordered mt-1 table-sm" style="width:100%">
            <thead>
                <tr style="background-color: #445069">
                    <th class="text-center" style="color: #FFFFFF; font-weight: bold;"> No</th>
                    <th class="text-center" style="color: #FFFFFF; font-weight: bold;">Tanggal Pengajuan</th>
                    <th class="text-center" style="color: #FFFFFF; font-weight: bold;">No Permohonan</th>
                    <th class="text-center"style="color: #FFFFFF; font-weight: bold;">Surat</th>
                    <th class="text-center" style="color: #FFFFFF; font-weight: bold;">Nama Pemohon </th>
                    <th class="text-center" style="color: #FFFFFF; font-weight: bold;">Status</th>
                </tr>
            </thead>
            <tbody>

                <tr style="background-color: #FCFFE7">
                    <td class="text-center">1 </td>
                    <td class="text-center">03/03/2024</td>
                    <td class="text-center">033</td>
                    <td class="text-center">Surat Keterangan Usaha</td>
                    <td class="text-center">Budi Setiawan</td>
                    <td class="text-center"><button class="btn btn-success" data-toggle="modal" data-target="#selesaiModal">
                            Selesai</td>
                </tr>

            </tbody>
        </table>



        <div class="d-flex justify-content-between flex-row-reverse mt-3">


            <div class="pagination" style="text-align: right;">

                <span class="text-muted">Showing 1 to 1 of 1 entries</span>
            </div>


        </div>

        </div>
        </div>



    </section>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content ">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-exclamation-circle "
                            style="font-size: 40px; color:orange; "></i></h5>
                    <br>
                    <h7> Mohon Maaf surat Anda belum dapat kami proses !</h7>
                    <br>
                    <b>"Foto KTP buram mohon foto ulang"</b>
                </div>
                <div class="modal-footer justify-content-center">

                    <button type="button" class="btn btn-primary" class="btn btn-center"
                        data-dismiss="modal">Kembali</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="selesaiModal" tabindex="-1" aria-labelledby="selesaiModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content ">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <b>"Selamat Surat Anda Telah selesai"</b>
                    <br>


                    <h5 class="modal-title" id="selesaiModalLabel"> <img src="images/surat.png" alt="surat"
                            style="width:150px; height:auto; margin-right:10px;"></h5>

                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-primary" class="btn btn-center" data-dismiss="modal">Unduh
                            Surat Keterangan Usaha</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
