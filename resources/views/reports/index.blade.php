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


        <div class="row mb-3">
            @each('reports._card', $reports, 'report', 'reports._empty')
        </div>

        @if ($reports->count())
            <div class="row justify-content-center">
                {{ $reports->links() }}
            </div>
        @endif
    </div>
@endsection
