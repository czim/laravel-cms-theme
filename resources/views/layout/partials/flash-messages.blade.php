@php
    $flashMessages = cms()->notifier()->getFlashed();
@endphp

@if ($flashMessages && count($flashMessages))

    @foreach ($flashMessages as $flashMessage)

        <div class="alert alert-{{ $flashMessage['level'] }} alert-dismissible" role="alert">

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

            {{ $flashMessage['message'] }}
        </div>

    @endforeach

@endif
