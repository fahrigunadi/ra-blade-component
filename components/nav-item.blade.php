@props(['href', 'icon', 'label', 'target'=>''])

@php
    $path = trim(str_replace(url('/'),'',$href),'/');
    $isActive = request()->is($path.'*') ? ' active' : '';
@endphp

<li class="nav-item {{ $isActive }}">
    <a target="{{ $target }}" class="nav-link" href="{{ $href }}">
        <i class="{{ $icon }}"></i>
        <span>{{ $label }}</span>
    </a>
</li>
