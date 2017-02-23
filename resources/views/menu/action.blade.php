
<li>
    <a href="{{ cms_route($presence->action(), $presence->parameters()) }}">

        @if ($presence->image())
            <i class="fa fa-{{ $presence->image() }} fa-fw"></i>
        @endif

        <span class="menu-item">{{ ucfirst($presence->label()) }}</span>
    </a>
</li>
