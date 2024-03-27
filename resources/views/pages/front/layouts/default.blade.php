<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>E-Kelurahan Kota Payakumbuh</title>
    <link rel="icon" type="image/png" href="/image/logo_pyk.png">
</head>

<body>

    @include('pages.front.layouts.header')
    <div id="app">
        <div class="main-wrapper">
            {{-- sidebar --}}
            @include('pages.front.layouts.sidebar')

            <!-- Main Content -->
            <div class="main-content">
                @yield('content')
                @yield('containermodal')
            </div>

            <footer class="main-footer">

            </footer>
        </div>
    </div>
</body>

</html>
