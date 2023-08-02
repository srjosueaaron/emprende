@extends('template')

@section('contenido')
    <h1>Nombre: {{ $individual->nombre }}</h1>

    <!--Ese nombre viene desde las rutas-->
    <p>Años de experiencia: {{ $individual->experiencia }} </p>
    <p>Profesion: {{ $individual->profesion }}</p>

@endsection