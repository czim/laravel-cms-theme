
<li>
    <a href="{{ $presence->action() }}">

        @if ($presence->image())
            <i class="fa fa-{{ $presence->image() }} fa-fw"></i>
        @endif

        {{ ucfirst($presence->label()) }}
    </a>
</li>
