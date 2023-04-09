@props(['label', 'name', 'value' => '', 'rows' => '', 'attr' => ''])
<div class="form-group">
    <Label>{{ $label }}</Label>
    <textarea rows="{{ $rows }}" id="{{ $name }}" class="form-control{{ $errors->has($name) ? ' is-invalid' : '' }}" name="{{ $name }}" {{ $attr }}>{{ old($name, $value) }}</textarea>
    @error($name)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
