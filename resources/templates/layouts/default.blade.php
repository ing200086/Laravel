<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    {!! HTML::style('css/vendor/normalize.css') !!}
    {!!  HTML::style('css/app.css')  !!}
    <title>Laravel 5</title>
</head>


<body>
    <div id="header-wrapper">
        @include('partials.header')
    </div>
    <div id="content-wrapper">
        @yield('content')
    </div>
    <div id="footer-wrapper">
        @include('partials.footer')
    </div>
</body>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://cdn.foundation5.zurb.com/foundation.js"></script>
<script>
    $(document).foundation();
</script>
</html>