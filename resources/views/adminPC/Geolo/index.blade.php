@extends('layouts.admin')

@section('content')
<div class="container">
    <hr class="featurette-divider">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Listado de Geolocalización</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
                <a class="btn btn-outline-success" href="/createGeo">Ingresar</a>
                <a class="btn btn-outline-danger" href="/GeoD">Desactivados</a>
          </div>
        </div>
      </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Link</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($Geo as $item)
                <tr>
                  <td>{{$item->id}}</td>
                  <td><iframe src="{{$item->link}}" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  <td>
                    <a type="button" class="btn btn-outline-primary" href="/editGeo/{{$item->id}}">Editar</a>
                    <a type="button" class="btn btn-outline-danger" href="/statusGeo/{{$item->id}}">Desactivar</a>
                  </td>
                </tr>
            @endforeach
         
          </tbody>
        </table>
      </div>
</div>
@endsection