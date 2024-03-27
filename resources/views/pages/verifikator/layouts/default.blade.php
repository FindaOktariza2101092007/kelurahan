<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>E-Kelurahan Kota Payakumbuh</title>
    {{-- <link rel="stylesheet" href="/css/style.css" /> --}}
</head>

<body>

    @include('pages.verifikator.layouts.header')
    <div id="app">
        <div class="main-wrapper">
            {{-- sidebar --}}
            @include('pages.verifikator.layouts.sidebar')

            <!-- Main Content -->
            <div class="main-content">
                @yield('content')
                @yield('containermodal')
            </div>
        </div>
    </div>
</body>

</html>
