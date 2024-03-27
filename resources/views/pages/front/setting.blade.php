@extends('pages.front.layouts.default')

@section('title')
    Pengaturan Profil
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/dashboard-front">Dashboard Front Office</a></div>
                {{-- <div class="breadcrumb-item"><a href="#">Layout</a></div> --}}
                {{-- <div class="breadcrumb-item">Default Layout</div> --}}
            </div>
        </div>
        <div class="row">
            <!-- Change Password Card -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Change Password</div>

                    <div class="card-body">
                        <form>
                            @csrf

                            <div class="form-group">
                                <label for="current_password">Current Password</label>
                                <input type="password" name="current_password" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="new_password">New Password</label>
                                <input type="password" name="new_password" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="new_password_confirmation">Confirm New Password</label>
                                <input type="password" name="new_password_confirmation" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Change Password</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Update Photo Card -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Update Photo</div>

                    <div class="card-body">
                        <form enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <input type="file" name="photo" class="form-control-file" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Update Photo</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    @endsection
