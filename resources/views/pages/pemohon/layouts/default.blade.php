<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />

    <!-- CSS Files -->
    <link href="assets/css/wizard/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link href="assets/css/wizard/paper-bootstrap-wizard.css" rel="stylesheet" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/css/wizard/demo.css" rel="stylesheet" />

    {{-- <!-- Fonts and Icons -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/wizard/themify-icons.css" rel="stylesheet">     --}}
    <title>E-Kelurahan Kota Payakumbuh</title>
    <link rel="icon" type="image/png" href="/image/logo_pyk.png">
</head>

<body>

    @include('pages.pemohon.layouts.header')
    <div id="app">
        <div class="main-wrapper">
            {{-- sidebar --}}
            @include('pages.pemohon.layouts.sidebar')

            <!-- Main Content -->
            <div class="main-content">
                @yield('content')
                @yield('containermodal')
            </div>

            <footer class="main-footer">
                <div class="footer-left">
                   
                </div>

               
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="assets/js/wizard/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="assets/js/wizard/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/wizard/jquery.bootstrap.wizard.js" type="text/javascript"></script>

<!--  Plugin for the Wizard -->
<script src="assets/js/wizard/demo.js" type="text/javascript"></script>
<script src="assets/js/wizard/paper-bootstrap-wizard.js" type="text/javascript"></script>

<!--  More information about jquery.validate here: https://jqueryvalidation.org/	 -->
<script src="assets/js/wizard/jquery.validate.min.js" type="text/javascript"></script>

</html>
