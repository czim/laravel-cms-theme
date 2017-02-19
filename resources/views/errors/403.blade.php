@extends('cms::layout.error')

@section('content')

    @include('cms::errors.partials.container', [
        'statusCode' => 403,
        'exception'  => $exception,
    ])

@endsection
