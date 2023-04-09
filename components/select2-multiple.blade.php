@props(['name', 'label', 'option' => [], 'value' => '', 'attr' => '', 'btnSelectAll' => true])
@php
    $value = old($name, $value);
@endphp
<div class="form-group" id="form-{{ $name }}">
    <label for="{{ $name }}">{{ $label }}</label>
    <select name="{{ $name }}[]" class="form-control{{ $errors->has($name) ? ' is-invalid' : '' }}"
        id="{{ $name }}" multiple {{ $attr }}>
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
    @if ($btnSelectAll)
        <div class="mt-2">
            <button type="button" class="btn btn-sm btn-primary" id="btnSelectAll{{ $name }}">Select All</button>
        </div>
    @endif
</div>
