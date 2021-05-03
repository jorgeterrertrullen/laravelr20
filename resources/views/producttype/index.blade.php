<h1>Lista de Tipos de Producto</h1>

<table>
@foreach ($producttypes as $type)
<tr>
    <td>{{ $type->id }}</td>
    <td>{{ $type->name }}</td>
</tr>
@endforeach
</table>