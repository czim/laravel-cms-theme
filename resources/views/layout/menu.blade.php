<div class="collapse navbar-collapse" id="app-navbar-collapse">

    @if (cms_auth()->check())

        <ul class="nav navbar-nav">

            @foreach ($menu->getMenuGroups() as $group)

                @include('cms::menu.group', [
                    'group' => $group,
                    'level' => 1,
                ])

            @endforeach

            @foreach ($menu->getMenuUngrouped() as $node)

                @include('cms::menu.node', [
                    'node' => $node,
                    'level' => 1,
                ])

            @endforeach

        </ul>

    @endif

    <!-- Right Side Of Navbar -->
    <ul class="nav navbar-nav navbar-right">

        <!-- Authentication Links -->
        @if ( ! cms_auth()->check())

            <li>
                <a href="{{ cms_route(\Czim\CmsCore\Support\Enums\NamedRoute::AUTH_LOGIN) }}">
                    {{ cms_trans('auth.labels.login') }}
                </a>
            </li>

        @else

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
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

</div>
