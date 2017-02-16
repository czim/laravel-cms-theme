<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('cms-theme.header.title', 'CMS') }} - @yield('title', 'Dashboard')</title>

    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <link rel="stylesheet" href="{{ asset('_cms/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('_cms/css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('_cms/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('_cms/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('_cms/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('_cms/css/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('_cms/css/select2-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('_cms/css/featherlight.min.css') }}">
    <link rel="stylesheet" href="{{ asset('_cms/css/bootstrap-datetimepicker.min.css') }}">

    @stack('javascript-head')

</head>
<body id="app-layout">

<div id="wrapper">
