@extends('layouts.admin')

@section('content')
<div class="container">
    <hr class="featurette-divider">
    <h2 class="text-center">Actualizar Red Social</h2>

    <form action="/updateRed" method="POST" class="row g-3 needs-validation" >
        @csrf
        @method('PUT')

        <input type="hidden" value="{{$Red->id}}" name="id">
        
        <div class="col-md-6 position-relative">
          <label for="title" class="form-label">Red Social</label>
          <input type="text" class="form-control" id="title" value="{{$Red->title}}" name="title"  required>
        </div>

        <div class="col-md-6 position-relative">
          <label for="icon" class="form-label">Icono</label>
          <input type="text" class="form-control" id="icon" value="{{$Red->icon}}" name="icon" required>
        </div>

        <div class="col-md-12 position-relative">
            <label for="link" class="form-label">Enlace Red Social</label>
            <textarea name="link" class="form-control" id="link">{{$Red->link}}</textarea>
        </div>

        <div class="col-12">
          <button style="margin-bottom: 15px;" class="btn btn-outline-success" type="submit">Actualizar</button>
          <a style="margin-bottom: 15px;" class="btn btn-outline-primary" href="/Redes">Regresar</a>
        </div>
      </form>
</div>
@endsection