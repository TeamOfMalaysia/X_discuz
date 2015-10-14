<!DOCTYPE html>

<html lang="en">

<head>
    <title>discuz_name</title>
    @section('css-main')
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    @show
</head>

<body>
<div class='container'>
    @include('forum.header')

    @yield('contents')

    @include('forum.footer')
</div>
    @section('js-main')
        <script type="application/javascript" src="{{ asset('js/jquery.js') }}"></script>
        <script type="application/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>

    @show
</body>
</html>