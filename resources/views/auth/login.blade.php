@extends('cms::layout.frameless')

@section('content')

    <div class="row">
        <div class="col-md-4 col-md-offset-4">

            <div class="panel panel-default login-panel">
                <div class="panel-heading">Login</div>
                <div class="panel-body" style="padding: 2em">
                    <form class="form-horizontal" role="form" method="POST" action="{{ cms_route(\Czim\CmsCore\Support\Enums\NamedRoute::AUTH_LOGIN) }}">
                        {{ csrf_field() }}

                        <fieldset>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus placeholder="E-mail">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                <input id="password" type="password" class="form-control" name="password" placeholder="Password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                    <button type="submit" class="btn btn-primary pull-right">
                                        <i class="fa fa-btn fa-sign-in"></i> Login
                                    </button>

                                    {{--<a class="btn btn-link" href="{{ cms_route(\Czim\CmsCore\Support\Enums\NamedRoute::AUTH_PASSWORD_EMAIL) }}">Forgot Your Password?</a>--}}
                            </div>

                        </fieldset>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection
