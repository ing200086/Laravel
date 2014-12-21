<!DOCTYPE html>
<html lang="en">
<head>
    {!! HTML::style('css/vendor/normalize.css') !!}
    {!! HTML::style('css/vendor/font-awesome/css/font-awesome.min.css')  !!}
    {!!  HTML::style('css/app.css')  !!}
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'> -->
    <title>Laravel 5</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>


<body>
    <header class="wrap clearfix" role='banner' itemscope itemtype='https://schema.org/WPHeader'>
    <div class="logo_title">
        <h1 class="title"><span>Supplier</span>City</h1>
    </div>

    <nav role="navigation" itemscope itemtype='https://schema.org/SiteNavigationElement'>
        <h1 class="hidden">Main Navigation</h1>

        <div class="navicon closed"><i class="fa fa-bars"></i></div>
        <ul class="navmenu" id="opennav">
            <li>
                <a href="#">About Us</a>
            </li>
            <li>
                <a href="#">Login</a>
            </li>
        </ul>
    </nav>
    </header>

    <main role="main" class="clearfix">
        <section class="mission-statement">
            <div class="wrap">
                <h2><span>Supplier</span>City</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident tenetur aperiam illo, odio consequatur dicta sapiente consectetur nemo quis quod minima vitae porro esse sed. Est nesciunt delectus, reiciendis blanditiis?</p>
            </div>
        </section>
    </main>
    

</body>
    {!!  HTML::script('js/vendor/jquery/jquery.min.js') !!}
    {!!  HTML::script('js/vendor/modernizr.js')  !!}
    {!!  HTML::script('js/iframeResponse.js')  !!}

</html>