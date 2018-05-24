<div class="form-group {{ $errors->has('progress') ? 'has-error' : '' }}">
   <label for="progress" class="control-label">Progress</label>
   <textarea name="progress" class="form-control">{{ $report->progress }}</textarea>

   @if ($errors->has('progress'))
       <span class="help-block">{{ $errors->first('progress') }}</span>
   @endif
</div>
