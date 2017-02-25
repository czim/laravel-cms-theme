
<li>
    <a href="{{ cms_route($presence->action(), $presence->parameters()) }}">

        @if ($presence->icon())
            <i class="fa fa-{{ $presence->icon() }} fa-fw"></i>
        @endif

        <span class="menu-item">{{ ucfirst($presence->label()) }}</span>
    </a>
</li>
