<div class="form-group {{ $errors->has($resource) ? 'has-error' : '' }}">
    <label for="{{ $resource }}" class="control-label">{{ $label }}</label>
    <textarea
            name="{{ $resource }}"
            class="form-control {{ $errors->has($resource) ? 'is-invalid' : '' }}"
            {{ $disabled ? 'disabled' : '' }}>{{ old($resource) ?? $report->{$resource} }}</textarea>

    @if ($errors->has($resource))
        <span class="invalid-feedback">{{ $errors->first($resource) }}</span>
    @endif
</div>
