@extends('layout/template')

@section('title','Registrar Facturas')

@section('contenido')



<main>
    <div class="container py-4">
        <h2>{{ $msg }}</h2>
        <a href="{{ url('facturas') }}" class ="btn btn-secondary">Regresar</a>
    </div>
</main>