<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>E-Kelurahan Kota Payakumbuh</title>
</head>

<body>

    @include('layouts.header')
    <div id="app">
        <div class="main-wrapper">
            {{-- sidebar --}}
            @include('layouts.sidebar')

            <!-- Main Content -->
            <div class="main-content">
                @yield('content')
                @yield('containermodal')
            </div>

            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2021 <div class="bullet"></div> Design By <a
                        href="https://baemon.web.id/">BaemonTeam</a>
                </div>

                @php

                    $commitHash = trim(exec('git log --pretty="%h" -n1 HEAD'));

                    $commitDate = new \DateTime(trim(exec('git log -n1 --pretty=%ci HEAD')));
                    $commitDate->setTimezone(new \DateTimeZone('UTC'));

                    $versi = $commitDate->format('Ymd.H.i.s');
                @endphp
                <div class="footer-right">
                    v1. {{ $versi }}
                </div>
            </footer>
        </div>
    </div>
</body>

</html>
