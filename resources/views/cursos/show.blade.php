@extends('layouts.plantilla')
@section('title','Curso ' .$curso)
@section('content')
<h1>Bienvenido al curso: {{$curso->name}} </h1>
<a href="{{route('cursos.index')}}">Volver a Cursos</a>
<br>
<a href="{{route('cursos.edit',$curso)}}">Editar Curso</a>
<p><strong>Categoria:</strong> {{$curso->categoria}}</p>
<p>{{$curso->description}}</p>

<form action="{{route('cursos.destroy', $curso)}}" method="POST">
    @method('delete')
    @csrf
    <button type="submit"> Eliminar</button>
</form>
@endsection
