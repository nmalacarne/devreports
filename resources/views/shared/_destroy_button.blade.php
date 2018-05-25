<form action="{{ route($route, $resource) }}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="DELETE" />
    {{ $slot }}
</form>
