@extends('layouts.app')

@section('content')
    <div class="row">
       <div class="col-lg-6 col-lg-offset-3">
           <div class="panel panel-info">
               <div class="panel-heading">
                   <div class="panel-title">
                       Create Report
                   </div>
               </div>

               <div class="panel-body">
                   <form method="POST" action="{{ route('reports.store') }}">
                       {{ csrf_field() }}

                       @include('reports._fields')
                       @include('reports._buttons')
                   </form>
               </div>
           </div>
       </div>
    </div>
@endsection
