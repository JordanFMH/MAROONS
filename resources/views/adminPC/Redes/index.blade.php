@extends('layouts.admin')

@section('content')
<div class="container">
    <hr class="featurette-divider">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Listado de Redes Sociales</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
                <a class="btn btn-outline-success" href="/createRed">Ingresar</a>
                <a class="btn btn-outline-danger" href="/RedD">Desactivados</a>
          </div>
        </div>
      </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Red Social</th>
              <th scope="col">Icono</th>
              <th scope="col">Link</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($Red as $item)
                <tr>
                  <td>{{$item->id}}</td>
                  <td>{{$item->title}}</td>
                  <td><i class="{{$item->icon}}"></i></td>
                  <td><a target="_blank" style="text-decoration: none" href="{{$item->link}}">{{$item->title}}</a></td>
                  <td>
                    <a type="button" class="btn btn-outline-primary" href="/editRed/{{$item->id}}">Editar</a>
                    <a type="button" class="btn btn-outline-danger" href="/statusRed/{{$item->id}}">Desactivar</a>
                  </td>
                </tr>
            @endforeach
         
          </tbody>
        </table>
      </div>
</div>
@endsection