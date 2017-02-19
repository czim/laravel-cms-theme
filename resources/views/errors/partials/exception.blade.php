<div class="panel panel-default exception" style="margin-bottom: 3em">

    <div class="panel-heading">
        @if (isset($isPrevious) && $isPrevious)
            <h4>{{ $previousIndex }}. {{ cms_trans('common.errors.previous-exception') }}</h4>
        @else
            <h4>{{ cms_trans('common.errors.exception-information') }}</h4>
        @endif
    </div>


    <div class="panel-body exception-introduction">
        <table>
            <tbody>
                @if ($isPrevious)
                <tr>
                    <th>Message</th>
                    <td><b>{!! nl2br(e($exception->getMessage())) !!}</b></td>
                </tr>
                @endif

                <tr>
                    <th>Exception</th>
                    <td>{{ $exception->getClass() }}</td>
                </tr>

                @if ($exception->getCode())
                    <tr>
                        <th>Code</th>
                        <td>{{ $exception->getCode() }}</td>
                    </tr>
                @endif

                @if ($exception->getFile())
                    <tr>
                        <th>File</th>
                        <td>{{ $exception->getFile() }} at line {{ $exception->getLine() }}</td>
                    </tr>
                @endif

            </tbody>
        </table>
    </div>

    <table class="table">
        <tbody>

            <?php
                $traces = (new \Czim\CmsCore\Support\Exception\TraceParser)
                    ->parse($exception->getTrace());
            ?>

            @foreach ($traces as $index => $trace)

                <tr>
                    <td>
                        {{ $index + 1 }}.
                        {!! $trace['function'] !!}
                        {!! $trace['file'] !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


@if ($previous = $exception->getPrevious())
    @include('cms::errors.partials.exception', [
        'isPrevious'    => true,
        'previousIndex' => $previousIndex + 1,
        'exception'     => $previous,
    ])
@endif
