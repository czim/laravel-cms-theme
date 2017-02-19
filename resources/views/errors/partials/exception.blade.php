<div class="panel panel-default exception" style="margin-bottom: 3em">

    @if (isset($header) && $header)
        <div class="panel-heading">
            {{ $previousIndex }}. {{ cms_trans('common.errors.previous-exception') }}
        </div>
    @else
        <div class="panel-heading">
            {{ cms_trans('common.errors.exception-information') }}
        </div>
    @endif

    <div class="panel-body exception-introduction">
        <table>
            <tbody>
                <tr>
                    <th>Exception</th>
                    <td>{{ $exception->getClass() }}</td>
                </tr>
                <tr>
                    <th>Code</th>
                    <td>{{ $exception->getCode() }}</td>
                </tr>

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
        'header'        => true,
        'previousIndex' => $previousIndex + 1,
        'exception'     => $previous,
    ])
@endif
