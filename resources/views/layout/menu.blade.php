
@if (cms_auth()->check())

    <div class="navbar-default sidebar" role="navigation">

        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">

                @foreach ($menu->getMenuLayout() as $node)

                    @include('cms::menu.node', [
                        'node' => $node,
                        'level' => 1,
                    ])

                @endforeach

            </ul>
        </div>

    </div>

@endif

