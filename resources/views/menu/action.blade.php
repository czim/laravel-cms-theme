


<li>
    <a href="{{ cms_route($presence['action'], $presence['parameters'] ?: []) }}">
        @if (Lang::has('cms::' . $presence['label']))
            {{ trans('cms::' . $presence['label']) }}
        @else
            {{ $presence['label'] }}
        @endif
    </a>
</li>
