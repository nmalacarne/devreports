@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
       <div class="col-lg-6">
           <div class="card">
               <div class="card-header">
                   <span class="justify-content-start">View Report</span>
                   <span class="pull-right">{{ $report->created_at->format('m/d/Y') }}</span>
               </div>

               <div class="card-body">
                   <div class="form-group">
                       @include('reports._fields', ['disabled' => true])
                   </div>
               </div>

               <div class="card-footer">
                   <div class="row">
                       <div class="col-6">
                           @component('shared._destroy_button', ['route' => 'reports.destroy', 'resource' => $report])
                               <button type="submit" class="btn btn-default">Delete</button>
                           @endcomponent
                       </div>

                       <div class="col-6">
                           <a href="{{ route('reports.edit',  $report) }}" class="pull-right">
                               <button type="button" class="btn btn-primary">Edit</button>
                           </a>
                       </div>
                   </div>
               </div>
           </div>
       </div>
    </div>
@endsection
