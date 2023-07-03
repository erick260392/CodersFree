@extends('layouts.plantilla')
@section('title', 'edit')
@section('content')
<h1>En esta pagina podras editar un Curso</h1>
<form action="{{route('cursos.update', $curso)}}" method="POST">
    @csrf
    @method('put')
    <label>
        Nombre:
        <br>
        <input type="text" name="name" value="{{ old('name',$curso->name)}}">
    </label>
   
    @error('name')
    <br>
        <small>* el campo Nombre es REQUERIDO para continuar</small>
        <br>
    @enderror
    <br>
    <label>
        Descripcion:
        <br>
        <textarea name="description" cols="30" rows="5" >{{old('description',$curso->description)}}</textarea>
    </label>
    @error('description')
    <br>
        <small>* el campo descripcion es REQUERIDO para continuar</small>
        <br>
    @enderror
    <br>
    <label>
        Categoria:
        <br>
        <input type="text" name="categoria" value="{{ old('categoria',$curso->categoria)}}">
    </label>
    @error('categoria')
        <small>* el campo descripcion es REQUERIDO para continuar </small>
    @enderror
    <br>
    <button type="submit">Actualizar Formulario</button>


</form> 
@endsection