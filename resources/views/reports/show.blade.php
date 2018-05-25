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
           </div>
       </div>
    </div>
@endsection
