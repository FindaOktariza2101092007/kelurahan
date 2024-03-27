@extends('pages.admin.layouts.default')

@section('title')
    Reset Password
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/penggunaan">Reset Password</a></div>

            </div>
        </div>


        <div class="section-body">
            <div class="card">
                <div class="card-body">


                    <form>
                        <div class="d-flex bd-highlight mb-3 align-items-center">

                            <div class="p-2 bd-highlight">

                                <input type="text" placeholder="Cari . . ." class="babeng babeng-select  ml-0"
                                    name="cari">
                            </div>

                            <div class="p-2 bd-highlight">

                                <select class="js-example-basic-single py-0  name="kelas_id" style="width: 100%">

                                    <option disabled selected value=""> Pilih Role</option>

                                </select>

                            </div>

                            <div class="p-2 bd-highlight">
                                <input class="btn btn-info ml-1 mt-2 mt-sm-0" type="submit" id="babeng-submit"
                                    value="Cari">
                            </div>

                            <div class="ml-auto p-2 bd-highlight">
                                <a href="/reset" type="submit" value="Import"
                                    class="btn btn-icon btn-primary btn-sm ml-2"><span class="pcoded-micon">
                                        <i class="fas fa-redo-alt"></i> Reset Semua </span>
                                </a>


                    </form>

                </div>
            </div>



            <table id="example" class="table table-striped table-bordered mt-1 table-sm" style="width:100%">
                <thead>
                    <tr style="background-color: #F1F1F1">
                        <th class="text-center py-2 babeng-min-row"> <input type="checkbox" id="chkCheckAll"> All</th>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>Email</th>
                        <th>foto</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td class="text-center">
                            <input type="checkbox" name="ids" class="checkBoxClass " value="1">
                        </td>
                        <td>1</td>
                        <td>Khozi Natul Amroor</td>
                        <td>1231242481</td>
                        <td>email@gmail.com</td>
                        <td>foto.png</td>
                        <td class="text-center">
                            <a href="reset" class="btn btn-warning btn-sm"><i class="fas fa-retweet"></i></span> Reset</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>
    </section>
@endsection
