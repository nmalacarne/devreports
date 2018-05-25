<div class="col-lg-3 mb-2">
    <div class="card">
        <div class="card-header">
            <div class="row panel-title">
                <div class="col-sm-6">
                    <span>{{ str_limit($report->user->name, 10) }}</span>
                </div>

                <div class="col-sm-6 text-right">
                    <span>{{ $report->created_at->format('m-d-Y') }}</span>
                </div>
            </div>
        </div>

        <div class="card-body">
            <p>{{ str_limit($report->progress, 75) }}</p>
        </div>

        <div class="card-footer">
            <div class="row">
                <div class="col-sm-4">
                    <a href="{{ route('reports.edit', $report) }}">
                        <button type="button" class="btn btn-default btn-block">
                            <span class="fa fa-pencil" aria-hidden="true"></span>
                        </button>
                    </a>
                </div>

                <div class="col-sm-4">
                    <a href="{{ route('reports.show', $report) }}">
                        <button type="button" class="btn btn-default btn-block">
                            <span class="fa fa-eye" aria-hidden="true"></span>
                        </button>
                    </a>
                </div>

                <div class="col-sm-4">
                    @component('shared._destroy_button', ['route' => 'reports.destroy', 'resource' => $report])
                        <button type="submit" class="btn btn-default btn-block">
                            <span class="fa fa-trash" aria-hidden="true"></span>
                        </button>
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
</div>
