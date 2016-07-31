
<li>
    <a href="{{ $presence['action'] }}">
        @if (Lang::has('cms::' . $presence['label']))
            {{ trans('cms::' . $presence['label']) }}
        @else
            {{ $presence['label'] }}
        @endif
    </a>
</li>
