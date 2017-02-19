@extends('cms::layout.error')

@section('content')

    @include('cms::errors.partials.container', [
        'statusCode' => 404,
        'exception'  => $exception,
    ])

@endsection
