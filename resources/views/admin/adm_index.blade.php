@extends('templates.login_master')
@section('content-center')
    <title>Panel de Administrado</title>
    <div>
        <h1>¿Que deseas hacer ?</h1>
        <br>
        
        <button onclick="window.location.href = '{{route('new_prod')}}'">Crear un nuevo producto </button>
        <br><br>
        <button onclick="window.location.href = '{{route('home')}}'">Volver al inicio </button>
        <br>
       
    </div>
@endsection