<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation | Welcome</title>
    <link rel="stylesheet" href="{{ asset('css/foundation.css')}}" />
    <script src="{{ asset('js/vendor/modernizr.js') }}"></script>
</head>

<body>

<!-- Header and Nav -->
<nav class="top-bar" data-topbar>
    <ul class="title-area">
        <li class="name">
            <h1><a href="#">Site Title</a></h1>
        </li>

        {{--@include('layouts._navigation')--}}
    </ul>
    <section class="top-bar-section">
        <ul class="right ">
            <li class="has-dropdown not-click">
                <a href="#">Menu Item</a>
            </li>
            <li class="has-dropdown not-click">
                <a href="#">Menu Item</a>
            </li>
        </ul>
    </section>
</nav>

<!-- End Header and Nav -->
        @yield('navigation')
<div class="row">
    <div class="large-12">
        @yield('content')
    </div>
</div>


<!-- Footer -->

<footer class="row">
    <div class="large-12 columns">
        <hr />
        <div class="row">
            <div class="large-6 columns">
                <p>© Travis Martin</p>
            </div>
        </div>
    </div>
</footer>

{{ HTML::script('js/vendor/jquery.js') }}
{{ HTML::script('js/foundation.min.js') }}

<script>
    $(document).foundation();
</script>
</body>
</html>