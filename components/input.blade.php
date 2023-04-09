@props(['name', 'label', 'type' => 'text', 'value' => '', 'placeholder' => '', 'attr' => '', 'small' => false])
<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>
    <input name="{{ $name }}" type="{{ $type }}" class="form-control{{ $errors->has($name) ? ' is-invalid' : ''}}" id="{{ $name }}" value="{{ old($name,$value) }}" placeholder="{{ $placeholder }}" {{ $attr }} >
    @error($name)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    @if ($small)
        <small>{!! $small !!}</small>
    @endif
</div>
