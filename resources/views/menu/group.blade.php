
@if (count($group->children()))

    <?php
        $levelClass = '';

        if ($level == 2) {
            $levelClass = 'nav-second-level';
        } elseif ($level == 3) {
            $levelClass = 'nav-third-level';
        } elseif ($level == 4) {
            $levelClass = 'nav-fourth-level';
        }

        // Determine whether any icon is used at all at the top level
        $hasIcon = false;
        /** @var \Czim\CmsCore\Contracts\Modules\Data\MenuPresenceInterface $group */
        foreach ($group->children() as $node) {
            if ($node->icon()) {
                $hasIcon = true;
                break;
            }
        }
    ?>

    <li>
        <a href="#">
            @if ($group->icon())
                <i class="fa fa-{{ $group->icon() }} fa-fw"></i>
            @elseif (isset($layerHasIcon) && $layerHasIcon)
                <i class="fa fa-fw"></i>
            @endif

            <span class="menu-item">{{ ucfirst($group->label()) }}</span>

            <span class="fa fa-angle-right menu-group-toggle"></span>
        </a>

        <ul class="nav {{ $levelClass }}">

            @foreach ($group->children() as $child)

                @include('cms::menu.node', [
                    'node'         => $child,
                    'level'        => $level + 1,
                    'layerHasIcon' => $hasIcon,
                ])

            @endforeach

        </ul>
    </li>

@else

    {{-- Don't display it for now --}}

@endif
