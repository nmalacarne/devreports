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

                       <div class="form-group {{ $errors->has('progress') ? 'has-error' : '' }}">
                           <label for="progress" class="control-label">Progress</label>
                           <textarea name="progress" class="form-control"></textarea>

                           @if ($errors->has('progress'))
                               <span class="help-block">{{ $errors->first('progress') }}</span>
                           @endif
                       </div>

                       <a href="{{ url()->previous() }}">
                           <button type="button" class="btn pull-left">Cancel</button>
                       </a>

                       <button type="submit" class="btn btn-primary pull-right">Save</button>
                   </form>
               </div>
           </div>
       </div>
    </div>
@endsection