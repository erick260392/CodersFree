@extends('layouts.plantilla')
@section('title','Contactanos')
@section('content')
<h1>Dejanos Un Mensaje</h1>

<form action="{{route('contactanos.store')}}" method="POST">
    @csrf
    <label for="name">
        Nombre:
        <br>
        <input type="text" name="name">
    </label>
    <br>
    @error('name')
<p><strong>*{{$message}}</strong></p>
    @enderror
    <label for="mail">
        Correo:
        <br>
        <input type="mail" name="mail">
    </label>
    <br>
    @error('mail')
    <p><strong>*{{$message}}</strong></p>
        @enderror
    <label for="mensaje">
        Mensaje:
        <br>
        <textarea name="mensaje" rows="4"></textarea>
    </label>
    <br>
    @error('mensaje')
    <p><strong>*{{$message}}</strong></p>
        @enderror
    <button type="submit">Enviar Mensaje</button>
</form>


@if (session('info'))
<script>
    alert("{{session('info')}}");
</script>

@endif
@endsection
