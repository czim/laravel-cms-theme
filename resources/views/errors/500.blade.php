@extends('cms::layout.error')

@section('content')

    @include('cms::errors.partials.container', [
        'statusCode' => 500,
        'exception'  => $exception,
    ])

@endsection
