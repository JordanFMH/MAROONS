@extends('layouts.admin')

@section('content')
<div class="container">
    <hr class="featurette-divider">
    
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Listado Logo</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
              <a class="btn btn-outline-success" href="/createLogo">Ingresar</a>
              <a class="btn btn-outline-danger" href="/LogoD">Desactivados</a>
        </div>
      </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Imagen</th>
              <th scope="col">Acción</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($Logo as $item)
            <tr>
              <td>{{$item->id}}</td>
              <td><img style="width:100px; height:100px;" src="{{asset('imagenLogo/'.$item->logo)}}" alt=""></td>
              <td>
                <a class="btn btn-outline-success" href="/editLogo/{{$item->id}}">Actualizar</a>
                <a class="btn btn-outline-danger" href="/statusLogo/{{$item->id}}">Desactivar</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
</div>
@endsection