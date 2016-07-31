
@if (isset($group['children']) && count($group['children']))

    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            @if (Lang::has('cms::' . $group['label']))
                {{ trans('cms::' . $group['label']) }}
            @else
                {{ $group['label'] }}
            @endif
            <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">

            @foreach ($group['children'] as $child)

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
