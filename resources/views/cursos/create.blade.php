@extends('layouts.plantilla')
@section('title', 'create')
@section('content')
    <h1>En esta pagina podras Crear un Curso</h1>
    <form action="{{route('cursos.store')}}" method="POST">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="name"  value="{{old('name')}}">
            
        </label>
        @error('name')
            <br>
            <small>* {{$message}}</small>
            <br>
        @enderror
        <br>
        <label>
            Descripcion:
            <br>
            <textarea name="description" cols="30" rows="5" >{{old('description')}}</textarea>
        </label>
    @error('description')
        <br>
        <small>* {{$message}}</small>
        <br>
    @enderror
        <br>
        <label>
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{old('categoria')}}">
        </label>
        @error('categoria')
            <br>
            <small>* {{$message}}</small>
            <br>
        @enderror
        <br>
        <button type="submit">Enviar Formulario</button>

    
    </form>
@endsection
