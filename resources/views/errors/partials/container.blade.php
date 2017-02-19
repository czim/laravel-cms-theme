<header>
    <h1 class="page-header text-danger">
        {{ cms_trans('common.errors.title.' . (isset($statusCode) ? (string) $statusCode : '500')) }}
    </h1>

    <div class="text-danger">
        <b>
            {!! nl2br(e($exception->getMessage())) !!}
        </b>
    </div>
</header>

<section style="margin-top: 4em">

    {{-- Show information and stack trace locally or when debugging --}}
    @if ($exception && config('app.debug'))

        @include('cms::errors.partials.exception', [
            'isPrevious'    => false,
            'previousIndex' => 1,
            'exception'     => $exception,
        ])

    @endif

</section>
