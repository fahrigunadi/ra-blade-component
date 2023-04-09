@props(['href' => '#', 'class' => '', 'label' => '', 'icon' => 'fa-plus'])

<a href="{{ $href }}" class="btn btn-primary btn-sm {{ $class }}">
    <i class="fas {{ $icon }}"></i> {{ $label }}
</a>
