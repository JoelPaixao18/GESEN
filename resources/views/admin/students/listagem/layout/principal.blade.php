<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>@yield('title')</title>

    <link rel="shortcut icon" href="{{ url('assets/img/favicon1.png') }}">

    <link
        href="{{ url('../../fonts.googleapis.com/css2ccf1.css?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&amp;display=swap') }}"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ url('assets/plugins/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ url('assets/plugins/feather/feather.css') }}">

    <link rel="stylesheet" href="{{ url('assets/plugins/icons/flags/flags.css') }}">

    <link rel="stylesheet" href="{{ url('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/new-style.css') }}">
</head>

<body>
    @include('admin.students.listagem.parcial.header')
    @include('admin.students.listagem.parcial.menu')

    <div class="main-wrapper">
        @yield('listagem-content')
    </div>

    <script src="{{ url('assets/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ url('assets/js/feather.min.js') }}"></script>

    <script src="{{ url('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <script src="{{ url('assets/plugins/datatables/datatables.min.js') }}"></script>

    <script src="{{ url('assets/js/script.js') }}"></script>
</body>

</html>
