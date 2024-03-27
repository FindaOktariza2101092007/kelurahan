@extends('pages.verifikator.layouts.default')

@section('title')
    List Permohonan Surat Keterangan Usaha
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/listsku">Surat Keterangan Usaha</a></div>
            </div>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="d-flex bd-highlight mb-3 align-items-center justify-content-end">

                            <div class="p-2 bd-highlight">
                                <input type="text" class="babeng babeng-select  ml-0" name="cari">
                            </div>

                            <div class="p-2 bd-highlight">
                                <input class="btn btn-info ml-1 mt-2 mt-sm-0" type="submit" id="babeng-submit"
                                    value="Cari">
                            </div>
                        </div>
                        <table id="example" class="table table-striped table-bordered mt-1 table-sm" style="width:100%">
                            <thead>
                                <tr style="background-color: #F1F1F1">
                                    <th>No </th>
                                    <th>Tanggal Pengajuan</th>
                                    <th>Nama Pemohon</th>
                                    <th>Status</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>1</td>
                                    <td>Senin, 20 Februari 2024</td>
                                    <td>Budi Setiawan</td>
                                    <td>Menunggu Verifikasi</td>
                                    <td class="text-center">
                                        <a href="detailsku" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></span> Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Senin, 21 Februari 2024</td>
                                    <td>Dadang Sudadang</td>
                                    <td>Menunggu Verifikasi</td>
                                    <td class="text-center">
                                        <a href="detail" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></span> Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Senin, 22 Februari 2024</td>
                                    <td>Syarifah</td>
                                    <td>Menunggu Verifikasi</td>
                                    <td class="text-center">
                                        <a href="detail" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></span> Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Senin, 23 Februari 2024</td>
                                    <td>Rini Rina</td>
                                    <td>Menunggu Verifikasi</td>
                                    <td class="text-center">
                                        <a href="detail" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></span> Detail</a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>

                        <div class="d-flex bd-highlight mb-3 align-items-center justify-content-between">
                            <div class="pagination">
                                <span class="text-muted">Showing 1 to 4 of 4 entries</span>
                            </div>
                            <div class="d-flex bd-highlight">
                                <div class="p-2 bd-highlight">
                                    <button class="btn btn-secondary mr-1" type="button">Previous</button>
                                </div>
                                <div class="p-2 bd-highlight">
                                    <button class="btn btn-secondary ml-1" type="button">Next</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
    </section>
@endsection
