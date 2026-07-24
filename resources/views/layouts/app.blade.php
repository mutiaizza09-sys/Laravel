<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'King Of Pasta')</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery.glide.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    <script src="{{ asset('js/MyJQ.js') }}"></script>
    <script src="{{ asset('js/jquery.localScroll.min.js') }}"></script>
    <script src="{{ asset('js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('js/WOW.min.js') }}"></script>

    <script>
        $(document).ready(function () {
            $('#navigations').localScroll({
                duration: 800
            });
        });
    </script>

    <script>
        new WOW().init();
    </script>
</head>

<body>

    @include('partials.header')

    @yield('content')

    @include('partials.footer')

</body>
</html>