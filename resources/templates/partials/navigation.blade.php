<nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area">
        <li class="name">
            <h1><a href="/">{{ $company }}</a></h1>
        </li>
        <li class="toggle-topbar menu-icon">
            <a href="#"><span>Menu</span></a>
        </li>
    </ul>
    <section  class="top-bar-section">
        <ul class="right">
            <li class="divider"></li>
            @foreach ($links as $name => $link)
                <li class="">{!!  HTML::link($link, $name)  !!}</a></li>
                <li class="divider"></li>    
            @endforeach
        </ul>
    </section>
</nav>