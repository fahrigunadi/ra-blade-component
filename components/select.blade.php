@props(['name', 'label', 'option' => [], 'value' => '', 'attr' => '', 'select' => true])
@php
    $value = old($name, $value);
@endphp
<div class="form-group" id="form-{{ $name }}">
    <label for="{{ $name }}">{{ $label }}</label>
    <select name="{{ $name }}" class="form-control{{ $errors->has($name) ? ' is-invalid' : '' }}" id="{{ $name }}" {{ $attr }}>
        @if ($select)
            <option value="">Select</option>
        @endif
        @foreach ($option as $row)
            @if ($row['value'] == $value)
                <option selected value="{{ $row['value'] }}">{{ $row['label'] }}</option>
            @else
                <option value="{{ $row['value'] }}">{{ $row['label'] }}</option>
            @endif
        @endforeach
    </select>
    @error($name)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
