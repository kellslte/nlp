<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
  @include('inc.head')
</head>
<body id="top">

    <!-- pageheader
    ================================================== -->
    <section class="s-pageheader s-pageheader--home">
    @include('inc.header')
    @if (Request::is('/'))
    @include('inc.featured')
    @endif
    </section>

    @yield('content')

    <section class="s-extra">
        @include('inc.extra')
        @include('inc.tags')
    </section>

    <footer class="s-footer">
        @include('inc.footer')
    </footer>

    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>
