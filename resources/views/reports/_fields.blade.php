<div class="form-group {{ $errors->has('progress') ? 'has-error' : '' }}">
   <label for="progress" class="control-label">Progress</label>
   @if (request()->route()->getName() === 'reports.show')
       <textarea name="progress" class="form-control" disabled>{{ $report->progress }}</textarea>
   @else
       <textarea name="progress" class="form-control">{{ $report->progress }}</textarea>
   @endif

   @if ($errors->has('progress'))
       <span class="help-block">{{ $errors->first('progress') }}</span>
   @endif
</div>
