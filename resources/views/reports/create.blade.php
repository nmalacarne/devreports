@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
       <div class="col-lg-6">
           <div class="card">
               <div class="card-header">
                   Create Report
               </div>

               <div class="card-body">
                   <form method="POST" action="{{ route('reports.store') }}">
                       {{ csrf_field() }}

                       @include('reports._fields', ['disabled' => false])
                       @include('reports._buttons')
                   </form>
               </div>
           </div>
       </div>
    </div>
@endsection
