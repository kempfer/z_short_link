<!DOCTYPE HTML>
<html>
<head>
    @include('site.includes.head')
</head>
<body style="height: 100%;">
    @include('site.includes.header')
    <!-- start container -->
    <div id="main_container" class="container">
        @yield('content')
    </div>
</body>
</html>