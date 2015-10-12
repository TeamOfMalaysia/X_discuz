<html>
<head>
    <title>discuz_name</title>
    @section('css-main')
    <link rel="stylesheet" src="">
    @show
</head>
<body>
    @include('forum.header')

    @yield('contents')

    @include('forum.footer')

    @section('js-main')
    <script type="application/javascript" src=""></script>
    @show
</body>
</html>