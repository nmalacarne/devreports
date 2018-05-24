@extends('layouts.app')

@section('content')
    <div class="row">
       <div class="col-lg-6 col-lg-offset-3">
           <div class="panel panel-info">
               <div class="panel-heading">
                   <div class="panel-title">
                       View Report
                   </div>
               </div>

               <div class="panel-body">
                   <div class="form-group">
                       <label for="progress" class="control-label">Progress</label>
                       <textarea name="progress" class="form-control" disabled>{{ $report->progress }}</textarea>
                   </div>
               </div>
           </div>
       </div>
    </div>
@endsection
