@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">My Reports</div>

                <a href="{{ route('reports.index') }}" class="hover-card-body">
                    <div class="card-body text-center">
                        <h1>{{ auth()->user()->reports()->count() }}</h1>
                    </div>
                </a>

                <div class="card-footer text-center">
                    <a href="{{ route('reports.create') }}">
                        <button type="button" class="btn btn-primary">Create a Report</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
