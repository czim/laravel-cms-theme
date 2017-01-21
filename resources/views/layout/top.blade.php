
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
        <a class="navbar-brand" href="{{ cms_route(\Czim\CmsCore\Support\Enums\NamedRoute::HOME) }}">
            {{ config('cms-theme.header.title', 'CMS') }}
        </a>
    @endif
</div>

<!-- Right Side Of Navbar -->
<ul class="nav navbar-top-links navbar-right">

    <!-- Authentication Links -->
    @if ( ! cms_auth()->check())

        <li>
            <a href="{{ cms_route(\Czim\CmsCore\Support\Enums\NamedRoute::AUTH_LOGIN) }}">
                {{ cms_trans('auth.labels.login') }}
            </a>
        </li>

    @else

        <li>
            @include('cms::layout.partials.locale-switch')
        </li>

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                <i class="fa fa-user fa-fw"></i>
                {{ trim(cms_auth()->user()->first_name . ' ' . cms_auth()->user()->last_name) ?: cms_auth()->user()->email }}
                <span class="caret"></span>
            </a>

            <ul class="dropdown-menu" role="menu">
                <li>
                    <a href="{{ cms_route(\Czim\CmsCore\Support\Enums\NamedRoute::AUTH_LOGOUT) }}">
                        <i class="fa fa-btn fa-sign-out"></i>
                        {{ cms_trans('auth.labels.logout') }}
                    </a>
                </li>
            </ul>
        </li>
    @endif
</ul>

