
@if(!Request::is('/'))
<section class="inner-banner-img" style="background-image: url(http://127.0.0.1:8000@yield('page_banner'));">
    <div class="container">
        <div class="row d-flex">
            <div class="col-lg-12 col-md-12 col-sm-12">
                @yield('page_title')
            </div>
        </div>
    </div>
</section>
@endif
@yield('content')
