@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-header">
                    <div class='btn-toolbar pull-right'>
                        <div class='btn-group'>
                            <a href="{{ route('reports.create') }}">
                                <button type='button' class='btn btn-primary'>Create Report</button>
                            </a>
                        </div>
                    </div>

                    <h2>My Reports</h2>
                </div>
            </div>
        </div>


        <div class="row">
            @foreach($reports as $report)
                <div class="col-lg-3">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="row panel-title">
                                <div class="col-sm-6">
                                    <span>{{ str_limit($report->user->name, 10) }}</span>
                                </div>

                                <div class="col-sm-6 text-right">
                                    <span>{{ $report->created_at->format('m-d-Y') }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="panel-body">
                            <p>{{ str_limit($report->progress, 75) }}</p>
                        </div>

                        <div class="panel-footer text-center">
                            <div class="row">
                                <div class="col-sm-6">
                                    <a href="{{ route('reports.edit', $report) }}">
                                        <button type="button" class="btn btn-default btn-block">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </button>
                                    </a>
                                </div>

                                <div class="col-sm-6">
                                    <form action="{{ route('reports.destroy', $report) }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE" />
                                        <button type="submit" class="btn btn-default btn-block">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row">
            <div class="text-center">
                {{ $reports->links() }}
            </div>
        </div>
    </div>
@endsection