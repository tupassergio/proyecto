@extends('layout/template')

@section('title','Editar Facturas')

@section('contenido')


<main>
    <div class="container py-4">
            <h2>Editar Facturas </h2>
            @if ($errors->any())

            <div class="alert alert-primary" role="alert">
                <ul>
                @foreach($errors->all() as $error)
               <li>{{$error}}</li>
                @endforeach

                </ul>
            </div>

            @endif

            <form action="{{ url('facturas/'.$factura->id )}}" method="post">
              @method("PUT")  
              @csrf

                  <div class ="mb-3 row">
                        <label for="nofactura" class="col-sm-2 col-form-label">nofactura </label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="nofactura" id="nofactura" values="{{ $factura->nofactura }}">
                  </div>


                  <div class ="mb-3 row">
                        <label for="nombre" class="col-sm-2 col-form-label">nombre </label>

                    <div class="col-sm-5">
                        <input type="text" class="form-control" name ="nombre" id="nombre" values="{{ $factura->nombre }}">
                  </div>

                  <div class ="mb-3 row">
                        <label for="nit" class="col-sm-2 col-form-label">nit </label>

                    <div class="col-sm-5">
                        <input type="text" class="form-control" name ="nit" id="nit" values="{{ $factura->nit }}">
                  </div>

                  <div class ="mb-3 row">
                        <label for="descripcion" class="col-sm-2 col-form-label">descripcion </label>

                    <div class="col-sm-5">
                        <input type="text" class="form-control" name ="descripcion" id="descripcion" values="{{ $factura->descripcion }}">
                  </div>

                  <div class ="mb-3 row">
                        <label for="cantidad" class="col-sm-2 col-form-label">cantidad </label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name ="cantidad" id="cantidad" values="{{ $factura->cantidad }}">
                  </div>

                  <div class ="mb-3 row">
                        <label for="total" class="col-sm-2 col-form-label">total </label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name ="total" id="total" values="{{ $factura->total }}">
                  </div>
                <a href="{{url('facturas') }}" class="btn btn-secondary">Regresar </a>

                <button type ="submit" class="btn btn-success">Guardar</button>

  
        
            </form>



    </div>

</main>