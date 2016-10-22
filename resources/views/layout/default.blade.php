@include('cms::layout.partials.header')

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

        @include(cms_config('views.top'))

        @include(cms_config('views.menu'))

    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">

            @yield('breadcrumbs')

            @include('cms::layout.partials.flash-messages')

            @section('errors')
                @include('cms::layout.errors')
            @show

            @yield('content')

        </div>
    </div>

@include('cms::layout.partials.footer')
