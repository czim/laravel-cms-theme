
@if (isset($group['children']) && count($group['children']))

    <?php
            $levelClass = '';

            if ($level == 2) {
                $levelClass = 'nav-second-level';
            } elseif ($level == 3) {
                $levelClass = 'nav-third-level';
            } elseif ($level == 4) {
                $levelClass = 'nav-fourth-level';
            }
    ?>

    <li>
        <a href="#">

            @if ($group->image())
                <i class="fa fa-{{ $group->image() }} fa-fw"></i>
            @endif

            {{ ucfirst($group->label()) }}

            <span class="fa arrow"></span>
        </a>

        <ul class="nav {{ $levelClass }}">

            @foreach ($group->children() as $child)

                @include('cms::menu.node', [
                    'node'  => $child,
                    'level' => $level + 1,
                ])

            @endforeach

        </ul>
    </li>

@else

    {{-- Don't display it for now --}}

@endif
