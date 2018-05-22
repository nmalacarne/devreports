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
            @each('reports._panel', $reports, 'report')
        </div>

        <div class="row">
            <div class="text-center">
                {{ $reports->links() }}
            </div>
        </div>
    </div>
@endsection
