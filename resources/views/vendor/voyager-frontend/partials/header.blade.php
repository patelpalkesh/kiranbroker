<!-- header -->
<header class="site-header" id="header">
    <nav class="navbar navbar-expand-lg
        @if(Request::is('/'))
            transparent-bg
        @endif
    static-nav">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="{{ asset('asset/images/logo-white.png') }}" alt="logo" class="logo-default">
                <img src="{{ asset('asset/images/logo.png') }}" alt="logo" class="logo-scrolled">
            </a>
            <div class="collapse navbar-collapse">

                <ul class="navbar-nav ml-auto">
					{{ menu('primary', 'voyager-frontend::partials.menu') }}

                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- header -->
