<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('cms-theme.header.title', 'CMS') }} - Error</title>

    <link rel="stylesheet" href="{{ asset('_cms/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('_cms/css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('_cms/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('_cms/css/font-awesome.min.css') }}">

    @stack('javascript-head')

    <style>
        .panel.exception table tr th,
         .panel.exception table tr td {
            padding-bottom: 0.5em;
        }

        .panel-body.exception-introduction table th {
            padding-right: 3em;
        }
    </style>
</head>
<body id="app-layout">

@php
    // Check if the home route is even available at this point
    $homeRoute = null;
    $routePrefix = app(\Czim\CmsCore\Support\Enums\Component::CORE)->config('route.name-prefix');

    if (app('router')->has($routePrefix . \Czim\CmsCore\Support\Enums\NamedRoute::HOME)) {
        $homeRoute = cms_route(\Czim\CmsCore\Support\Enums\NamedRoute::HOME);
    }
@endphp

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">{{ cms_trans('cms.nav.toggle_navigation') }}</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image or Title -->
            @if (config('cms-theme.header.partial'))
                @include(config('cms-theme.header.partial'))
            @else
                <a class="navbar-brand" href="{{ $homeRoute ?: '#' }}">
                    {{ config('cms-theme.header.title', 'CMS') }}
                </a>
            @endif
        </div>

        <!-- Right Side Of Navbar -->
        <ul class="nav navbar-top-links navbar-right">

            @if ($homeRoute)
                <li>
                    <a href="{{ $homeRoute }}">
                        {{ cms_trans('common.errors.return-to-home') }}
                    </a>
                </li>
            @endif

            <li>
                <a href="javascript: window.history.back();">
                    {{ cms_trans('common.errors.return-to-previous') }}
                </a>
            </li>

        </ul>

    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">

            @yield('content')

        </div>
    </div>

</div>


<!-- JavaScripts -->
<script src="{{ asset('_cms/js/jquery.min.js') }}"></script>
<script src="{{ asset('_cms/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('_cms/js/app.js') }}"></script>

@stack('javascript-end')

</body>
</html>
