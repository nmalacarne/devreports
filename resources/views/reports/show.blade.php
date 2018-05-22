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
                   @include('reports._fields')
               </div>
           </div>
       </div>
    </div>
@endsection
