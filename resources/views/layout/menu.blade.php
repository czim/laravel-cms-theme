
@if (cms_auth()->check())

    <div class="navbar-default sidebar" role="navigation">

        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">

                {{-- Determine whether any icon is used at all at the top level --}}
                @php
                    /** @var \Czim\CmsCore\Contracts\Menu\MenuRepositoryInterface $menu */
                    $layout  = $menu->getMenuLayout();
                    $hasIcon = false;

                    foreach ($layout as $node) {
                        if ($node->icon()) {
                            $hasIcon = true;
                            break;
                        }
                    }
                @endphp

                @foreach ($layout as $node)

                    @include('cms::menu.node', [
                        'node'         => $node,
                        'level'        => 1,
                        'layerHasIcon' => $hasIcon,
                    ])

                @endforeach

            </ul>
        </div>

    </div>

@endif

