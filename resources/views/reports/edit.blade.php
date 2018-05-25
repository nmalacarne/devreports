@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
       <div class="col-lg-6">
           <div class="card">
               <div class="card-header">
                   Edit Report
               </div>

               <div class="card-body">
                   <form method="POST" action="{{ route('reports.update', $report) }}">
                       {{ csrf_field() }}
                       {{ method_field('PUT') }}

                       @include('reports._fields', ['disabled' => false])
                       @include('reports._buttons')
                   </form>
               </div>
           </div>
       </div>
    </div>
@endsection
