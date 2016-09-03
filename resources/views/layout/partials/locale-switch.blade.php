
@if ($localized)

    <form id="locale-switch-form" class="form" method="post" action="{{ cms_route(\Czim\CmsCore\Support\Enums\NamedRoute::LOCALE_SET) }}">
        {{ csrf_field() }}
        <input id="locale-switch-input" type="hidden" name="locale" value="{{ $currentLocale }}">

        <ul class="locale-switch">
            <li class="dropdown menu-item">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ asset("_cms/img/flags/{$currentLocale}.png") }}" title="{{ $currentLocale }}">
                    {{ strtoupper($currentLocale) }}
                    <span class="caret"></span>
                </button>

                @if (count($availableLocales) > 1)

                    <ul class="dropdown-menu" style="min-width: 0">

                    @foreach ($availableLocales as $locale)
                        @continue($currentLocale == $locale)

                        <li>
                            <a class="submit-locale-switch" href="#" data-locale="{{ $locale }}">
                                <img src="{{ asset("_cms/img/flags/{$locale}.png") }}" title="{{ $locale }}">
                                {{ strtoupper($locale) }}
                            </a>
                        </li>

                    @endforeach
                </ul>

                @endif
            </li>
        </ul>
    </form>

    @push('javascript-end')
        <script>
            $('.submit-locale-switch').click(function() {
                $('#locale-switch-input').val($(this).attr('data-locale'));
                $('#locale-switch-form').submit();
            });
        </script>
    @endpush

@endif
