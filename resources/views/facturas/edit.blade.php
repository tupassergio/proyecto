@extends('layout/template')

@section('title','Registrar Facturas')

@section('contenido')



<main>
    <div class="container py-4">
            <h2>Registrar Facturas </h2>
            @if ($errors->any())

            <div class="alert alert-primary" role="alert">
                <ul>
                @foreach($errors->all() as $error)
               <li>{{$error}}</li>
                @endforeach

                </ul>
            </div>

            @endif

            <form action = "{{url('facturas')}}" method = "post">
              @csrf
                  <div class ="mb-3 row">
                        <label for="nofactura" class="col-sm-2 col-form-label">No Factura </label>

                    <div class="col-sm-5">
                        <input type="text" class="form-control" name ="nofactura" id="nofactura" values="{{old ('nofactura')}}" require>

                  </div>


                  <div class ="mb-3 row">
                        <label for="nombre" class="col-sm-2 col-form-label">nombre </label>

                    <div class="col-sm-5">
                        <input type="text" class="form-control" name ="nombre" id="nombre" values="{{old ('nombre')}}" require>

                  </div>

                  <div class ="mb-3 row">
                        <label for="nit" class="col-sm-2 col-form-label">nit </label>

                    <div class="col-sm-5">
                        <input type="text" class="form-control" name ="nit" id="nit" values="{{old ('nit')}}" require>

                  </div>


                  <div class ="mb-3 row">
                        <label for="descripcion" class="col-sm-2 col-form-label">descripcion </label>

                    <div class="col-sm-5">
                        <input type="text" class="form-control" name ="descripcion" id="descripcion" values="{{old ('descripcion')}}" require>

                  </div>

             
                  <div class ="mb-3 row">
                        <label for="cantidad" class="col-sm-2 col-form-label">cantidad </label>

                    <div class="col-sm-5">
                        <input type="text" class="form-control" name ="cantidad" id="cantidad" values="{{old ('cantidad')}}" require>

                        <div class ="mb-3 row">
                        <label for="total" class="col-sm-2 col-form-label">total </label>

                    <div class="col-sm-5">
                        <input type="text" class="form-control" name ="total" id="total" values="{{old ('total')}}" require>



                  </div>
                <a href="{{url('facturas')}}" class="btn btn-secondary">Regresar </a>

                <button type ="submit" class="btn btn-success">Guardar</button>

  
        
            </form>



    </div>







</main>