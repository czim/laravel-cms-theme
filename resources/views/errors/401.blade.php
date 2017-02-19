@extends('cms::layout.error')

@section('content')

    @include('cms::errors.partials.container', [
        'statusCode' => 401,
        'exception'  => $exception,
    ])

@endsection
