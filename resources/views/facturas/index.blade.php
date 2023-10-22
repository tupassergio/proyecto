@extends('layout/template')

@section('title','Facturas')

@section('contenido')

<main>

<div class = "container py-4">
        <h2>Listado de Facturas</h2>

        <a href ="{{url('facturas/create')}}" class="btn btn-primary btn-sm">Nueva Factura</a>

        <table class="table table-hover">

        <thead>
                <th>#</th>
                <th>NoFactura</th>
                <th>Nit</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Cantidad</th>
                <th>Total</th>
                <th>Editar</th>
                <th>Eliminar</th>
        </thead>
        <tbody>
        @foreach($facturas as $factura)
        <tr>
         <td> {{ $factura->id }}</td>
         <td> {{ $factura->nofactura }}</td> 
         <td> {{ $factura->nit }}</td> 
         <td> {{ $factura->nombre }}</td> 
         <td> {{ $factura->descripcion }}</td> 
         <td> {{ $factura->cantidad }}</td> 
         <td> {{ $factura->total }}</td>  
         <td><a href="{{ url('facturas/'.$factura->id.'/edit' ) }}" class="btn btn-warning btn-sm">Editar</a></td> 
         <td> 
                <form action="{{ url('facturas/'.$factura->id) }}" method ="post">
                        @method("DELETE")
                        @csrf
                        <button type ="submit" class= "btn btn-danger btn-sm">Eliminar</button>
                </form>
         </td>      


        </tr>
                @endforeach
        </tbody>

       </table>


</div>
</main>