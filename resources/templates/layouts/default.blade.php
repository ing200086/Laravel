<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    {!!  HTML::style('assets/css/app.css')  !!}
    <title>Laravel 5</title>
</head>
<body>
    @include('partials.navigation')

    <div class="container">
        @yield('content')
    </div>
    

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="http://cdn.foundation5.zurb.com/foundation.js"></script>
    <script>
        $(document).foundation();
    </script>
</body>
</html>