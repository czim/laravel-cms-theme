@extends(cms_config('views.layout'))

@section('content')
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Blank Page</div>

                    <div class="panel-body">
                        <h3>Testing page</h3>

                        Current controller/action: {{ Route::currentRouteAction() }}
                        <br>
                        Current route name: {{ Route::currentRouteName() }}

                        <br><br>
                        middleware: <br>
                        @foreach (Route::getMiddleware() as $key => $ware)
                            <b>{{$key}}</b>: {{ $ware }}<br>
                        @endforeach

                    </div>

                </div>
            </div>
        </div>
@endsection
