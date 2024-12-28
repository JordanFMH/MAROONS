@extends('layouts.admin')

@section('content')
<div class="container">
    <hr class="featurette-divider">
    <h2 class="text-center">Actualizar Carrusel</h2>
    <form action="/updateCarrusel/{{$Carrusel->imagen}}" method="POST" class="row g-3 needs-validation" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      
      <input type="hidden" name="id" value="{{$Carrusel->id}}">

        <div class="col-md-12 position-relative">
            <label for="imagen" class="form-label">Imagen</label>
            <input type="file" class="form-control" id="imagen" name="imagen">
        </div>

        <div class="col-md-12">
            <figure class="figure">
                <img style="width:500px; height:250px;" src="{{asset('imagenCarrusel/'.$Carrusel->imagen)}}" class="figure-img img-fluid rounded" alt="...">
            </figure>
        </div>

        <div class="col-12">
          <button style="margin-bottom: 15px;" class="btn btn-outline-success" type="submit">Actualizar</button>
          <a style="margin-bottom: 15px;" class="btn btn-outline-primary" href="/Carrusel">Regresar</a>
        </div>
      </form>
</div>
   
@endsection