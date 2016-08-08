@include('cms::layout.partials.header')

<div class="container">

    @include('cms::layout.errors')

    @yield('content')

</div>

@include('cms::layout.partials.footer')
