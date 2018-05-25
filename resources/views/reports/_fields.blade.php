<div class="form-group {{ $errors->has('progress') ? 'has-error' : '' }}">
   <label for="progress" class="control-label">Progress</label>
   <textarea
           name="progress"
           class="form-control {{ $errors->has('progress') ? 'is-invalid' : '' }}"
           {{ $disabled ? 'disabled' : '' }}>{{ old('progress') ?? $report->progress }}</textarea>

   @if ($errors->has('progress'))
       <span class="invalid-feedback">{{ $errors->first('progress') }}</span>
   @endif
</div>

<div class="form-group {{ $errors->has('todos') ? 'has-error' : '' }}">
    <label for="todos" class="control-label">Todo</label>
    <textarea
            name="todos"
            class="form-control {{ $errors->has('todos') ? 'is-invalid' : '' }}"
            {{ $disabled ? 'disabled' : '' }}>{{ old('todos') ?? $report->todos }}</textarea>

    @if ($errors->has('todos'))
        <span class="invalid-feedback">{{ $errors->first('todos') }}</span>
    @endif
</div>

<div class="form-group {{ $errors->has('comments') ? 'has-error' : '' }}">
    <label for="comments" class="control-label">Issues / Comments</label>
    <textarea
            name="comments"
            class="form-control {{ $errors->has('comments') ? 'is-invalid' : '' }}"
            {{ $disabled ? 'disabled' : '' }}>{{ old('comments') ?? $report->comments }}</textarea>

    @if ($errors->has('comments'))
        <span class="invalid-feedback">{{ $errors->first('comments') }}</span>
    @endif
</div>
