@extends('pages.verifikator.layouts.default')

@section('title')
    Laporan Permohonan Surat
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/listskbm">Laporan</a></div>
            </div>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <form action="/submit-form" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tanggal">Tanggal:</label>
                                    <input type="date" id="tanggal" name="tanggal" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <input type="date" id="tanggal" name="tanggal" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="kategori">Kategori:</label>
                                    <select id="kategori" name="kategori" class="form-control" required>
                                        <option value="">Pilih Kategori Surat</option>
                                        <option value="kategori1">Surat Keterangan Kematian</option>
                                        <option value="kategori2">Surat Keterangan Usaha</option>
                                        <option value="kategori3">Surat Keterangan Domisili</option>
                                        <option value="kategori3">Surat Keterangan Belum Menikah</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Tampilkan</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="d-flex bd-highlight mb-3 align-items-center justify-content-end">

                            <div class="p-2 bd-highlight mr-auto">
                                <input class="btn btn-success ml-1 mt-2 mt-sm-0" type="submit" id=""
                                    value="Cetak">
                            </div>

                            <div class="p-2 bd-highlight">
                                <input type="text" class="select  ml-0" name="cari">
                            </div>

                            <div class="p-2 bd-highlight">
                                <input class="btn btn-info ml-1 mt-2 mt-sm-0" type="submit" id=""
                                    value="Cari">
                            </div>

                        </div>
                        <table id="example" class="table table-striped table-bordered mt-1 table-sm" style="width:100%">
                            <thead>
                                <tr style="background-color: #F1F1F1">
                                    <th>No </th>
                                    <th>Tanggal Pengajuan</th>
                                    <th>Nama Pemohon</th>
                                    <th>Surat</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>1</td>
                                    <td>Senin, 20 Februari 2024</td>
                                    <td>Budi Setiawan</td>
                                    <td>Surat Keterangan Usaha</td>
                                    <td>Selesai</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Selasa, 21 Februari 2024</td>
                                    <td>Dadang Sudadang</td>
                                    <td>Surat Keterangan Usaha</td>
                                    <td>Selesai</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Rabu, 22 Februari 2024</td>
                                    <td>Beni Bear</td>
                                    <td>Surat Keterangan Usaha</td>
                                    <td>Selesai</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Kamis, 23 Februari 2024</td>
                                    <td>Budi Setiawan</td>
                                    <td>Surat Keterangan Usaha</td>
                                    <td>Selesai</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Jumat, 24 Februari 2024</td>
                                    <td>Rini Rina</td>
                                    <td>Surat Keterangan Usaha</td>
                                    <td>Selesai</td>
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
        </div>
    </section>

 @endsection
