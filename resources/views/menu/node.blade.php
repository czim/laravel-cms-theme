
@if ($node['type'] === \Czim\CmsCore\Support\Enums\MenuPresenceType::GROUP)

    {{-- Don't show childless groups --}}
    @if (isset($node['children']) && count($node['children']))

        @include('cms::menu.group', [
            'group'        => $node,
            'level'        => $level,
            'layerHasIcon' => isset($layerHasIcon) && $layerHasIcon,
        ])

    @endif

@elseif ($node['type'] === \Czim\CmsCore\Support\Enums\MenuPresenceType::ACTION)

    @include('cms::menu.action', [
        'presence'     => $node,
        'level'        => $level,
        'layerHasIcon' => isset($layerHasIcon) && $layerHasIcon,
    ])

@elseif ($node['type'] === \Czim\CmsCore\Support\Enums\MenuPresenceType::LINK)

    @include('cms::menu.link', [
        'presence'     => $node,
        'level'        => $level,
        'layerHasIcon' => isset($layerHasIcon) && $layerHasIcon,
    ])

@else

    <b>Not implemented</b>

@endif
