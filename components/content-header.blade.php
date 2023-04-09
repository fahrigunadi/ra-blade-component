@props(['title' => ''])
<h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
<ol class="breadcrumb">
    {{ $slot }}
</ol>
