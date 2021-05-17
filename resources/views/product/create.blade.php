@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <h1>Alta de Productos</h1>

      <form action="/products" method="post" class="form">
        @csrf
        <div class="form-group">
          <label for="">Nombre</label>
          <input class="form-control" type="text" name="name" value="{{old('name')}}">
        </div>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
          <label for="">Descripción</label>
          <input class="form-control" type="text" name="description" value="{{old('description')}}">
        </div>
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
          <label for="">Precio</label>
          <input class="form-control" type="text" name="price" value="{{old('price')}}">
        </div>
        @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        VIEJO: {{old('product_type_id')}}
        <div class="form-group">
          <label for="">Tipo</label>
          <select name="product_type_id" id="" class="form-control">
              @foreach($types as $type)
                <option value="{{$type->id}}"
                    {{ (old('product_type_id') == $type->id) ? 'selected' : 'no toca' }} >
                  {{$type->name}}
                </option>
              @endforeach
          </select>
        </div>
        @error('product_type_id')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
          <input class="form-control" type="submit" value="Guardar">
        </div>

      </form>

    </div>
  </div>
</div>
@endsection