@props(['action' => '', 'method' => '', 'enctype' => false, 'id' => false])
<form action="{{ $action }}" method="{{ $method ? 'POST' : 'GET' }}" {!! $enctype ? 'enctype="'.$enctype.'"' : '' !!} {!! $id ? 'id="'.$id.'"' : '' !!}>
    @method($method)
    @csrf
    {{ $slot }}
</form>
