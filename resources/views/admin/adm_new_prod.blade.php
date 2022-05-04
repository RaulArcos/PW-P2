@extends('templates.login_master')
@section('content-center')

<title>Nuevo Producto</title>

<h2>Insertar artículo</h2>

<!-- Abrimos FORMULARIO que se le enviará a la ruta guardar_articulo -->
<form action="{{route('store_prod')}}" method="POST">
<!-- Para que laravel permita hacer post, evita TokenMismatchException-->
{{csrf_field()}}
<!-- Para insertar un texto con un name =titulo -->
<label for="name">Nombre:</label> <br />                   
<input type="text" name="name" class="input" /> <br /><br />
<!-- Para insertar un texto con un name = descripcion -->
<label for="description">Descripción:</label> <br />
<textarea rows="5" name="description" class="form_control"/></textarea>
<br /><br />

<!-- Para seleccionar la compañia hacemos un desplegable-->
<label for="company_id">Selecciona la compañia del producto</label>
<br>    
<select name="company_id">
@foreach($companies as $i)
    <option value="{{$i->id}}">{{$i->name}}</option>
@endforeach
</select>
<br><br>

<!-- Label para el precio -->
<label for="price">Precio del producto:</label>
<br>
<input type="text" name="price" value="0.00"/>

<br /> <br/>
<button type="submit" class='btn btn-primary'>Crear Articulo</button>

<!-- Cerramos el formulario -->
</form>


@endsection