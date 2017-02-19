@extends('cms::layout.error')

@section('content')

    <header>
        <h1 class="page-header text-danger">
            Error: I'm a teapot.
        </h1>

        <div class="text-danger">
            <a href="https://tools.ietf.org/html/rfc2324" target="_blank">RFC 2324</a>.
        </div>
    </header>

@endsection
