@extends('layouts.app')

@section('content')
    <div class="row">
       <div class="col-lg-6 col-lg-offset-3">
           <div class="panel panel-info">
               <div class="panel-heading">
                   <div class="panel-title">
                       Edit Report
                   </div>
               </div>

               <div class="panel-body">
                   <form method="POST" action="{{ route('reports.update', $report) }}">
                       {{ csrf_field() }}
                       {{ method_field('PUT') }}

                       @include('reports._fields')
                       @include('reports._buttons')
                   </form>
               </div>
           </div>
       </div>
    </div>
@endsection
